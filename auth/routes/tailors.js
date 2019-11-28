
const router = require('express').Router();
const Controller = require('../controllers/tailors');

var base = "/tailors";

router.get(base+'/all', Controller.getTailors);

router.get(base+'/details/:id', Controller.getDetails);

module.exports = router;
