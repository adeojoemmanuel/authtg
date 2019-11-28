

module.exports = (req, file, cb) => {
  console.log('I am the one fucking things up')
  if(file.mimetype.includes("image")){
    cb(null, true)
  }else{
    cb(null, false)
  }
}
