import $ from 'jquery';

const numbers = elem => {
  var elems = $(elem);
  elems.html(function (i, oldHTML) {
    return oldHTML.replace(/\b(\d+)\b/g, '<span class="numbers">$1</span>');
  })
}

numbers('h3, p, li a, small, body.project header .right, body.project header .middle');