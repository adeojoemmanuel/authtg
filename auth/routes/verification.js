

const router = require('express').Router();
const Controller = require('../controllers/verification');
const Validator = require('../utils/validator');
const id = "\\w{24}";

router.post(`/`, Validator(Controller.refreshCodeSchema), Controller.refreshCode)

router.post(`/:user(${id})`, Validator(Controller.verifySchema), Controller.verify)

module.exports = router;
