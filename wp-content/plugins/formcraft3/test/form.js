let jsdom = require('mocha-jsdom')
let expect = require('chai').expect
let fs = require('fs')

let formHTML = fs.readFileSync(__dirname + '/form1.html', 'utf8')

describe('mocha tests', function () {

  jsdom()

  before(function () {
    global.$ = global.jQuery = require('jquery')
    document.body.innerHTML = formHTML
    require('../assets/js/form.min.js')
  })

  it('works', function () {
    console.log('ready')
    //console.log($('form').data('FormCraft'))
  })

})
