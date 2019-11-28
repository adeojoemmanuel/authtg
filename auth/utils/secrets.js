
const jwt = require('jsonwebtoken');

module.exports = class authSecrets{
  static get keys(){
    return {
      hash : 'T@!10R5@N5$@17',
      reset : 'TG@@rktfbermgs(@@)@@'
    }
  }

  static encrypt(payload, key, options = {}){
    return new Promise((resolve, reject) => {
      resolve(jwt.sign(payload, this.keys[key], options))
    })
  }

  static decrypt(payload, key){
    return new Promise((resolve, reject) => {
      jwt.verify(payload, authSecrets.keys[key], function(err, decoded){
        if(err) return reject(err)
        resolve(decoded)
      })
    })
  }
}
