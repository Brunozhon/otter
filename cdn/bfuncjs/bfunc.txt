var bfunc = {
  getElements: function(elem) {
    return document.querySelectorAll(elem);
  },
  styleElement: function(elem, prop, val) {
    elem.style.setProperty(prop, val);
  },
  getElement: function(elem) {
    return document.querySelector(elem);
  },
  repeat: function(num, doo) {
    for (var i = 0; i < num; count++) {
      doo();
    }
  },
  displayObject: function(obj, sep) {
    var i, txt; var j = 0;
    for (i in obj) {
      txt += obj[i];
      if (Object.values(obj).length - 1 > i) {
        txt += sep;
      }
    }
  }
};
