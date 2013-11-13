// The main namespace for this site.
var App = {
	events: {},
	globals: {
		data: {},
		obj: {
			dialog: {
				modal: {
					buttons: {
						"OK": function(e) {
							$(this).dialog("close");
						}
					},
					modal: true,
					open: function(e) {
						// Somehow, they seem to have a cursor...
						$(this).disableSelection();
					}
				}
			}
		}
	},
	utils: {}
};

// Some good prototype functions that keep from interfering with other
// object functionality. String.format() is in Console.js so take a look
// there to inspect that one.
if (!Number.prototype.getDecimals) {
	Number.prototype.getDecimals = function() {
		var num = this,
			match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
		if (!match)
			return 0;
		return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
	}
}
if (!Number.prototype.hasDecimal) {
	Number.prototype.hasDecimal = function() {
		return this % 1 !== 0;
	}
}
if (!Number.prototype.isInt) {
	Number.prototype.isInt = function() {
		return this % 1 === 0;
	}
}
if (!String.prototype.count) {
	String.prototype.count = function(subString, allowOverlapping) {
		var str = this,
			type = typeof subString,
			ERR_END = " for String.prototype.count.";
		if (type === "undefined") throw new Error("No substring specified{0}".format(ERR_END))
		else if (type !== "string") throw new Error("Substring provided must be a string{0}".format(ERR_END));
		str += ""; subString += "";
		if (subString.length <= 0) return str.length + 1;
		var n = 0, pos = 0;
		var step = (allowOverlapping) ? 1 : subString.length;
		while (true) {
			pos = str.indexOf(subString,pos);
			if (pos >= 0) {
				n++;
				pos += step;
			} else
				break;
		}
		return n;
	}
}
if (!String.prototype.getDecimals) {
	String.prototype.getDecimals = function() {
		return parseFloat(this).getDecimals();
	}
}
if (!String.prototype.reduce) {
	String.prototype.reduce = function() {
		var str = this,
			parts = str.split("\n").join(" ").replace(/[\s\t\r]/gi, " ").trim().split(" "),
			newParts = [],
			newString = "";
		$.each(parts, function(i, part) {
			if (part != "") {
				newParts.push(part);
			}
		});
		newString = newParts.join(" ");
		return newString;
	}
}
if (!String.prototype.ucwords) {
	String.prototype.ucwords = function() {
		var str = this;
		return (str + '').replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function ($1) {
			return $1.toUpperCase();
		});
	}
}
App.utils.getQueryVar = function(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}