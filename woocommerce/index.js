

//const app = require('express')();
//const bp = require('body-parser');
//const cors = require('cors')
//const port = 1700;
//const routes = require('./routes/base');
//
//app.use(cors())
//app.use(bp.json());
//app.use(bp.urlencoded({extended : true}));
//app.use(routes)
//
//app.listen(port, () => {
//  console.log(`Woocommerce App is online at port ${port}`);
//})

const app = require('express')();
const bp = require('body-parser');
const port = 1000;
const cors = require('cors');
const multipart = require('multer')({ dest: 'uploads/' }).none();
var WooCommerceAPI = require('woocommerce-api');
var request = require('request');
var WooCommerce = new WooCommerceAPI({
  url: 'https://market.tailorgang.io',
  consumerKey: 'ck_c163fd514c079ff28da56c70ed31bd0b8b461928',
  consumerSecret: 'cs_cde57b2d18bfa927dc88b1fadb34acac0033b3d5',
  wpAPI: false,
  version: 'v3'
});

app.use(cors());
app.use(bp.json());
app.use(bp.urlencoded({extended : true}));

app.use(multipart);

const baseRoutes = require('./routes/base');
const passwordRoutes = require('./routes/password')
const verificationRoutes = require('./routes/verification');
const $u = require('./requesters/database.user');

app.use(baseRoutes);
app.use('/password', passwordRoutes);
app.use('/verification', verificationRoutes);
require('./responders/login')(1004);
require('./publishers/auth.publisher');


app.listen(port, () => {
  console.log("Authentication App is online at port "+port);
});

/*
moving this to a woocommerce service all together
*/
/*
app.get("/getImage/:email", (req, res) => {
	$u.User.findOne({email: req.params.email}).then(function(data){ res.json(data)});
		//res.json(data);
});
*/
//global.reviews;
//global.link = [];

let reviews;
let link = [];

app.get("/woocommercereviews", function(req, res, next){
	
	let page_id = req.query.page_id;
	
	WooCommerce.get('products/'+page_id+'/reviews')
	.then(reviews => {
		res.json(reviews);
	})
	.catch(err => {
		res.json(err);
	})
	
	/* 
	
	, function(err, data, res){
		
		global.reviews = JSON.parse(res).product_reviews;
		
	});
	
	
	
	
	
   
 
     for(i = 0; i < global.reviews.length; i++){
        req_email = global.reviews[i].reviewer_email != undefined? global.reviews[i].reviewer_email : "null@chi.com";
        url  = $u.User.findOne({email: req_email}).then(function(data_){ return data_.pictureURL }, function(error){ return error
		link.push(url); */
 });
     }
     resp.json({report: global.link});
});

app.post("/woocommercesignup", function(req, resp, next){
	let firstName = req.body.firstname;
	let lastName = req.body.lastname;
	let email_ = req.body.email;
	let password_ = req.body.password;
	let phone_ = req.body.phone;
	request.post(
	  "https://v2.nugi-appservice-auth247.info/auth/signup",
	  {json: {email: email_, password: password_, fullname: firstName+" "+lastName, phone: phone_}},
	   function(error, response, body){
		 user_exists = body.verification == undefined? true: JSON.parse(body.verification.status) == false? false: true;
		   if(user_exists == false){
				var data = {
					customer: {
					email: email_,
					first_name: firstName,
					last_name: lastName,
					password: password_,
					}
				};
				WooCommerce.post('customers', data, function(err, data, res) {
				   console.log(res);
				   resp.json({response_: JSON.parse(res).customer.id > 0, data_: {user_id: JSON.parse(res).customer.id, cookie: "" }});
				});
	   }else{
		  resp.json({response_: false});
	   }
	});
});

app.get("/woocommerceremove", function(req, resp, next){
  id = req.query.id;
  WooCommerce.delete('customers/'+id+'?force=true', function(err, data, res) {
    resp.json({user_id: ""+id, response: res});
  });
});

app.post("/woocommercelogin", function(req, resp, next){
global.user_exists = false;
let email_ = req.body.email;                      //test value "cpo@nugitech.com";
let password_ = req.body.password;                //test value "sundonahzora2011";
let first_name_ = "";
let last_name_ = "";
request.post(
    'https://v2.nugi-appservice-auth247.info/auth/login',//also no need for http request back here, there is a method for it
    { json: { email: email_, password: password_ } },
    function (error, response, body) {
        status = body.verification == undefined? false: JSON.parse(body.verification.status);//no need to check for this, and dont JSON parse, it will result to an error
        if(status){
           first_name_ = body.fullname.split(" ")[0];
           last_name_ = body.fullname.split(" ")[1];
	   pictureURL = body.pictureURL;
           WooCommerce.get('customers/email/'+email_, function(err, data, res) {
              global.user_exists = JSON.parse(res).errors == undefined? JSON.parse(res).customer.id > 0 : false;
              if(!global.user_exists){
                 var data = {
                    customer: {
                    email: email_,
                    first_name: first_name_,
                    last_name: last_name_,
                    password: password_,
	 	    avatar_url: "https://ik.imagekit.io/nugitech/users/tr:h-50,w-50/"+pictureURL,
                    }
                };
                WooCommerce.post('customers', data, function(err, dat, res) {//use promise no call backs
                   console.log(res);
		   resp.json({response_: JSON.parse(res).customer.id > 0, post_data: data, data_: {id: JSON.parse(res).customer.id, cookie: "" }});
                });
              }else{
		resp.json({response_: "true", data_: {id: JSON.parse(res).customer.id, cookie: "" }});
	      }
           });
           console.log(status);
        }else{
           resp.json({response_: "false"});
           console.log(JSON.parse(body));
        }
    });
});

