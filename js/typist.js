// Generated by CoffeeScript 1.12.6
(function() {
	var Utilities,
	  bind1 = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
	  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
	  hasProp = {}.hasOwnProperty;
  
	Utilities = (function() {
	  function Utilities() {
		this._fireEvent = bind1(this._fireEvent, this);
		this._empty = bind1(this._empty, this);
		this._each = bind1(this._each, this);
	  }
  
	  Utilities.prototype._addEvent = function(element, event, fn, useCapture) {
		if (useCapture == null) {
		  useCapture = false;
		}
		return element.addEventListener(event, fn, useCapture);
	  };
  
	  Utilities.prototype._forEach = function(array, fn, bind) {
		var i, l, results;
		i = 0;
		l = array.length;
		results = [];
		while (i < l) {
		  if (i in array) {
			fn.call(bind, array[i], i, array);
		  }
		  results.push(i++);
		}
		return results;
	  };
  
	  Utilities.prototype._each = function(array, fn, bind) {
		if (array) {
		  this._forEach(array, fn, bind);
		  return array;
		}
	  };
  
	  Utilities.prototype._pass = function(fn, args, bind) {
		if (args == null) {
		  args = [];
		}
		return function() {
		  return fn.apply(bind, args);
		};
	  };
  
	  Utilities.prototype._delay = function(fn, delay, bind, args) {
		if (args == null) {
		  args = [];
		}
		return setTimeout(this._pass(fn, args, bind), delay);
	  };
  
	  Utilities.prototype._periodical = function(fn, periodical, bind, args) {
		if (args == null) {
		  args = [];
		}
		return setInterval(this._pass(fn, args, bind), periodical);
	  };
  
	  Utilities.prototype._setHtml = function(element, string) {
		return element.innerHTML = string;
	  };
  
	  Utilities.prototype._getHtml = function(element) {
		return element.innerHTML;
	  };
  
	  Utilities.prototype._empty = function(element) {
		return this._setHtml(element, "");
	  };
  
	  Utilities.prototype._fireEvent = function(event, text) {
		if (this.options[event]) {
		  return this.options[event].call(this, text, this.options);
		}
	  };
  
	  Utilities.prototype._extend = function(object, properties) {
		var key, val;
		for (key in properties) {
		  val = properties[key];
		  object[key] = val;
		}
		return object;
	  };
  
	  return Utilities;
  
	})();
  
	this.Typist = (function(superClass) {
	  extend(Typist, superClass);
  
	  function Typist(element, options) {
		if (options == null) {
		  options = {};
		}
		this.typeLetter = bind1(this.typeLetter, this);
		this.typeText = bind1(this.typeText, this);
		this.selectOffset = bind1(this.selectOffset, this);
		this.selectText = bind1(this.selectText, this);
		this.fetchVariations = bind1(this.fetchVariations, this);
		this.next = bind1(this.next, this);
		this.start = bind1(this.start, this);
		this.setupDefaults = bind1(this.setupDefaults, this);
		this.options = {
		  typist: element,
		  letterSelectInterval: 60,
		  interval: 3000,
		  selectClassName: "selectedText"
		};
		this.options = this._extend(this.options, options);
		this.elements = {
		  typist: this.options.typist
		};
		this.offsets = {
		  current: {
			index: 0,
			text: ""
		  }
		};
		if (this.elements.typist) {
		  this.setupDefaults();
		}
	  }
  
	  Typist.prototype.setupDefaults = function() {
		this.variations = this.fetchVariations(this.elements.typist);
		return this._delay(this.start, this.options.interval);
	  };
  
	  Typist.prototype.start = function() {
		this.currentVariation = this.variations[this.offsets.current.index];
		this.offsets.current.text = this.currentVariation.split('');
		return this.selectText();
	  };
  
	  Typist.prototype.next = function() {
		this.offsets.current.index++;
		this.offsets.current.index = this.offsets.current.index % this.variations.length;
		this.currentVariation = this.variations[this.offsets.current.index];
		return this.offsets.current.text = this.currentVariation.split('');
	  };
  
	  Typist.prototype.fetchVariations = function(element) {
		var i, j, len, text, v, value, variations;
		text = element.getAttribute("data-typist");
		text = text.replace(/\\'/g, "'");
		text = text.replace(/\\,/g, '!COMMA!');
		variations = text.split(",");
		for (i = j = 0, len = variations.length; j < len; i = ++j) {
		  v = variations[i];
		  variations[i] = v.replace(/!COMMA!/g, ',');
		}
		value = this._getHtml(element);
		variations.splice(0, 0, value);
		i = 0;
		while (i < variations.length) {
		  if (variations[i] === '') {
			variations.splice(i, 1);
		  } else {
			i++;
		  }
		}
		return variations;
	  };
  
	  Typist.prototype.selectText = function(index) {
		var offset;
		if (index == null) {
		  index = 0;
		}
		offset = (this.offsets.current.text.length - index) - 1;
		if (offset >= 0) {
		  this.selectOffset(offset);
		}
		if (offset > 0) {
		  return this._delay((function(_this) {
			return function() {
			  return _this.selectText(index + 1);
			};
		  })(this), this.options.letterSelectInterval);
		} else {
		  return this._delay((function(_this) {
			return function() {
			  _this.next();
			  return _this.typeText();
			};
		  })(this), this.options.letterSelectInterval);
		}
	  };
  
	  Typist.prototype.selectOffset = function(offset) {
		var selected, text, unselected;
		text = this.offsets.current.text;
		selected = text.slice(offset, text.length).join('');
		unselected = text.slice(0, offset).join('');
		return this._setHtml(this.elements.typist, unselected + "<em class=\"" + this.options.selectClassName + "\">" + selected + "</em>");
	  };
  
	  Typist.prototype.typeText = function() {
		this.typeTextSplit = this.currentVariation.split("");
		this.typeLetter();
		return this._fireEvent("onSlide", this.currentVariation);
	  };
  
	  Typist.prototype.typeLetter = function(index) {
		var letter;
		if (index == null) {
		  index = 0;
		}
		letter = this.typeTextSplit[index];
		if (index === 0) {
		  this.elements.typist.innerHTML = '';
		}
		this.elements.typist.innerHTML += letter;
		if (index + 1 >= this.typeTextSplit.length) {
		  return this._delay((function(_this) {
			return function() {
			  return _this.selectText();
			};
		  })(this), this.options.interval);
		} else {
		  return this._delay((function(_this) {
			return function() {
			  return _this.typeLetter(index + 1);
			};
		  })(this), this.options.letterSelectInterval);
		}
	  };
  
	  return Typist;
  
	})(Utilities);
  
  }).call(this);
  