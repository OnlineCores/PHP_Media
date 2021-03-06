! function () {
	function e(e) {
		var t = "data-ya-simple-scrollbar";
		e.hasAttribute(t) || (e.setAttribute(t, t), s(e))
	}

	function s(e) {
		for (var s = o("yass-wrapper"), t = s.appendChild(o("yass-content")), r = t.appendChild(o("yass-sensor")); e.firstChild;) r.appendChild(e.firstChild);
		e.appendChild(s);
		var a = s.appendChild(o("yass-scrollbar")),
			l = a.appendChild(o("yass-scrollbar-button"));
		e.style.overflow = "hidden";
		var d = function () {
			var e, o, d = null,
				c = null,
				p = !1,
				h = function () {
					p = !1;
					var s = t.scrollTop;
					e >= o ? (d = c = null, a.style.display = "none") : (c = e * e / o, c = Math.max(Math.min(e / 2, yaSimpleScrollbar.minHeight), c), d = s / (o - e) * (e - c), a.style.display = "block", l.style.height = c + "px", l.style.top = d + "px")
				},
				u = function () {
					p || (p = !0, n(function () {
						h()
					}))
				},
				f = function () {
					r.offsetWidth !== s.offsetWidth && (r.style.width = s.offsetWidth + "px"), e = t.clientHeight, o = t.scrollHeight, u()
				};
			i(s, f), i(r, f), n(f);
			var y = function (s) {
				s = Math.max(0, Math.min(e - c, s)), d !== s && (t.scrollTop = s * (o - e) / (e - c))
			};
			return {
				getTop: function () {
					return d
				},
				getHeight: function () {
					return c
				},
				repaint: h,
				move: y
			}
		}();
		! function () {
			var e, s;
			l.addEventListener("mousedown", function (t) {
				e = t.pageY, s = d.getTop(), document.addEventListener("mousemove", i), document.addEventListener("mouseup", r), a.className = "yass-scrollbar yass-scrollbar-drag", t.preventDefault(), t.stopPropagation()
			});
			var t = !1,
				o = null,
				i = function (i) {
					o = i.pageY, t || (t = !0, n(function () {
						t = !1;
						var n = o - e;
						d.move(Math.round(s + n))
					}))
				},
				r = function () {
					document.removeEventListener("mousemove", i), document.removeEventListener("mouseup", r), a.className = "yass-scrollbar"
				}
		}(), t.addEventListener("scroll", d.repaint)
	}
	var t = [".yass-wrapper { overflow: hidden; height: 100%; position: relative; z-index: 1; }", ".yass-content { height: 100%; width: 100%; padding: 0 40px 0 0; position: relative; overflow-y: scroll; -moz-box-sizing: content-box; box-sizing: content-box; }", ".yass-sensor { width: 100%; display: block; position: relative; }", ".yass-scrollbar { position: absolute; top: 0; right: 0; z-index: 2; width: 10px; height: 100%; opacity: 0; transition: opacity 0.1s linear; }", ".yass-scrollbar-button { position: absolute; left: 0; cursor: pointer; width: 12px; background: rgba(127, 127, 127, 0.2); }", ".yass-wrapper:hover .yass-scrollbar, .yass-scrollbar.yass-scrollbar-drag { opacity: 1; }", ".yass-resize-sensor, .yass-resize-sensor-expand, .yass-resize-sensor-shrink { position: absolute; top: 0; bottom: 0; left: 0; right: 0; overflow: hidden; z-index: -1; visibility: hidden; }", ".yass-resize-sensor-expand .yass-resize-sensor-child { width: 100000px; height: 100000px; }", ".yass-resize-sensor-shrink .yass-resize-sensor-child { width: 200%; height: 200%; }", ".yass-resize-sensor-child { position: absolute; top: 0; left: 0; transition: 0s; }"].join("");
	! function () {
		var e = document.createElement("style");
		e.textContent = t, document.addEventListener("DOMContentLoaded", function () {
			(document.getElementsByTagName("head")[0] || document.body).appendChild(e)
		})
	}();
	var n = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || function (e) {
		return setTimeout(e, 20)
	},
		o = function (e) {
			var s = document.createElement("div");
			return s.className = e, s
		},
		i = function (e, s) {
			var t = o("yass-resize-sensor"),
				i = t.appendChild(o("yass-resize-sensor-expand")),
				r = t.appendChild(o("yass-resize-sensor-shrink"));
			i.appendChild(o("yass-resize-sensor-child")), r.appendChild(o("yass-resize-sensor-child"));
			e.appendChild(t);
			var a, l, d, c = e.offsetWidth,
				p = e.offsetHeight,
				h = function () {
					i.scrollLeft = 1e5, i.scrollTop = 1e5, r.scrollLeft = 1e5, r.scrollTop = 1e5
				};
			h();
			var u = function () {
				c === a && p === l || (c = a, p = l, s(), h())
			},
				f = function (s) {
					a = e.offsetWidth, l = e.offsetHeight, d || (d = !0, n(function () {
						d = !1, u()
					}))
				};
			i.addEventListener("scroll", f), r.addEventListener("scroll", f)
		};
	window.yaSimpleScrollbar = {
		attach: e,
		minHeight: 40
	}
}();
