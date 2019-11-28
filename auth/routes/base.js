

const router = require('express').Router();
const Controller = require('../controllers/base');
const Validator = require('../utils/validator');


router.post('/login', Validator(Controller.loginSchema), Controller.login)

router.post('/signup', Validator(Controller.signupSchema), Controller.signup)

router.get('/getuser/:id', Controller.getuser);

router.get('/availability/:item', Controller.available);

module.exports = router;
