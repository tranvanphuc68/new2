var e, t, n, i, r, o, s;
! function(e, t) { "use strict"; "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) { if (!e.document) throw new Error("jQuery requires a window with a document"); return t(e) } : t(e) }("undefined" != typeof window ? window : this, function(E, e) { "use strict"; var t = [],
        T = E.document,
        i = Object.getPrototypeOf,
        a = t.slice,
        m = t.concat,
        l = t.push,
        r = t.indexOf,
        n = {},
        o = n.toString,
        g = n.hasOwnProperty,
        s = g.toString,
        c = s.call(Object),
        v = {},
        y = function(e) { return "function" == typeof e && "number" != typeof e.nodeType },
        b = function(e) { return null != e && e === e.window },
        u = { type: !0, src: !0, noModule: !0 };

    function _(e, t, n) { var i, r = (t = t || T).createElement("script"); if (r.text = e, n)
            for (i in u) n[i] && (r[i] = n[i]);
        t.head.appendChild(r).parentNode.removeChild(r) }

    function w(e) { return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e } var x = function(e, t) { return new x.fn.init(e, t) },
        f = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

    function d(e) { var t = !!e && "length" in e && e.length,
            n = w(e); return !y(e) && !b(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e) }
    x.fn = x.prototype = { jquery: "3.3.1", constructor: x, length: 0, toArray: function() { return a.call(this) }, get: function(e) { return null == e ? a.call(this) : e < 0 ? this[e + this.length] : this[e] }, pushStack: function(e) { var t = x.merge(this.constructor(), e); return t.prevObject = this, t }, each: function(e) { return x.each(this, e) }, map: function(n) { return this.pushStack(x.map(this, function(e, t) { return n.call(e, t, e) })) }, slice: function() { return this.pushStack(a.apply(this, arguments)) }, first: function() { return this.eq(0) }, last: function() { return this.eq(-1) }, eq: function(e) { var t = this.length,
                n = +e + (e < 0 ? t : 0); return this.pushStack(0 <= n && n < t ? [this[n]] : []) }, end: function() { return this.prevObject || this.constructor() }, push: l, sort: t.sort, splice: t.splice }, x.extend = x.fn.extend = function() { var e, t, n, i, r, o, s = arguments[0] || {},
            a = 1,
            l = arguments.length,
            c = !1; for ("boolean" == typeof s && (c = s, s = arguments[a] || {}, a++), "object" == typeof s || y(s) || (s = {}), a === l && (s = this, a--); a < l; a++)
            if (null != (e = arguments[a]))
                for (t in e) n = s[t], s !== (i = e[t]) && (c && i && (x.isPlainObject(i) || (r = Array.isArray(i))) ? (o = r ? (r = !1, n && Array.isArray(n) ? n : []) : n && x.isPlainObject(n) ? n : {}, s[t] = x.extend(c, o, i)) : void 0 !== i && (s[t] = i));
        return s }, x.extend({ expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""), isReady: !0, error: function(e) { throw new Error(e) }, noop: function() {}, isPlainObject: function(e) { var t, n; return !(!e || "[object Object]" !== o.call(e) || (t = i(e)) && ("function" != typeof(n = g.call(t, "constructor") && t.constructor) || s.call(n) !== c)) }, isEmptyObject: function(e) { var t; for (t in e) return !1; return !0 }, globalEval: function(e) { _(e) }, each: function(e, t) { var n, i = 0; if (d(e))
                for (n = e.length; i < n && !1 !== t.call(e[i], i, e[i]); i++);
            else
                for (i in e)
                    if (!1 === t.call(e[i], i, e[i])) break; return e }, trim: function(e) { return null == e ? "" : (e + "").replace(f, "") }, makeArray: function(e, t) { var n = t || []; return null != e && (d(Object(e)) ? x.merge(n, "string" == typeof e ? [e] : e) : l.call(n, e)), n }, inArray: function(e, t, n) { return null == t ? -1 : r.call(t, e, n) }, merge: function(e, t) { for (var n = +t.length, i = 0, r = e.length; i < n; i++) e[r++] = t[i]; return e.length = r, e }, grep: function(e, t, n) { for (var i = [], r = 0, o = e.length, s = !n; r < o; r++) !t(e[r], r) !== s && i.push(e[r]); return i }, map: function(e, t, n) { var i, r, o = 0,
                s = []; if (d(e))
                for (i = e.length; o < i; o++) null != (r = t(e[o], o, n)) && s.push(r);
            else
                for (o in e) null != (r = t(e[o], o, n)) && s.push(r); return m.apply([], s) }, guid: 1, support: v }), "function" == typeof Symbol && (x.fn[Symbol.iterator] = t[Symbol.iterator]), x.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) { n["[object " + t + "]"] = t.toLowerCase() }); var h = function(n) { var e, h, _, o, r, p, f, m, w, l, c, C, E, s, T, g, a, u, v, x = "sizzle" + 1 * new Date,
            y = n.document,
            S = 0,
            i = 0,
            d = se(),
            b = se(),
            I = se(),
            A = function(e, t) { return e === t && (c = !0), 0 },
            D = {}.hasOwnProperty,
            t = [],
            k = t.pop,
            N = t.push,
            O = t.push,
            L = t.slice,
            j = function(e, t) { for (var n = 0, i = e.length; n < i; n++)
                    if (e[n] === t) return n;
                return -1 },
            P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            H = "[\\x20\\t\\r\\n\\f]",
            R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            W = "\\[" + H + "*(" + R + ")(?:" + H + "*([*^$|!~]?=)" + H + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + H + "*\\]",
            M = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)",
            q = new RegExp(H + "+", "g"),
            Y = new RegExp("^" + H + "+|((?:^|[^\\\\])(?:\\\\.)*)" + H + "+$", "g"),
            X = new RegExp("^" + H + "*," + H + "*"),
            B = new RegExp("^" + H + "*([>+~]|" + H + ")" + H + "*"),
            $ = new RegExp("=" + H + "*([^\\]'\"]*?)" + H + "*\\]", "g"),
            F = new RegExp(M),
            U = new RegExp("^" + R + "$"),
            z = { ID: new RegExp("^#(" + R + ")"), CLASS: new RegExp("^\\.(" + R + ")"), TAG: new RegExp("^(" + R + "|[*])"), ATTR: new RegExp("^" + W), PSEUDO: new RegExp("^" + M), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + H + "*(even|odd|(([+-]|)(\\d*)n|)" + H + "*(?:([+-]|)" + H + "*(\\d+)|))" + H + "*\\)|)", "i"), bool: new RegExp("^(?:" + P + ")$", "i"), needsContext: new RegExp("^" + H + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + H + "*((?:-\\d)?\\d*)" + H + "*\\)|)(?=[^-]|$)", "i") },
            K = /^(?:input|select|textarea|button)$/i,
            Q = /^h\d$/i,
            V = /^[^{]+\{\s*\[native \w/,
            G = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            Z = /[+~]/,
            J = new RegExp("\\\\([\\da-f]{1,6}" + H + "?|(" + H + ")|.)", "ig"),
            ee = function(e, t, n) { var i = "0x" + t - 65536; return i != i || n ? t : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320) },
            te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            ne = function(e, t) { return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e },
            ie = function() { C() },
            re = ye(function(e) { return !0 === e.disabled && ("form" in e || "label" in e) }, { dir: "parentNode", next: "legend" }); try { O.apply(t = L.call(y.childNodes), y.childNodes), t[y.childNodes.length].nodeType } catch (n) { O = { apply: t.length ? function(e, t) { N.apply(e, L.call(t)) } : function(e, t) { for (var n = e.length, i = 0; e[n++] = t[i++];);
                    e.length = n - 1 } } }

        function oe(e, t, n, i) { var r, o, s, a, l, c, u, f = t && t.ownerDocument,
                d = t ? t.nodeType : 9; if (n = n || [], "string" != typeof e || !e || 1 !== d && 9 !== d && 11 !== d) return n; if (!i && ((t ? t.ownerDocument || t : y) !== E && C(t), t = t || E, T)) { if (11 !== d && (l = G.exec(e)))
                    if (r = l[1]) { if (9 === d) { if (!(s = t.getElementById(r))) return n; if (s.id === r) return n.push(s), n } else if (f && (s = f.getElementById(r)) && v(t, s) && s.id === r) return n.push(s), n } else { if (l[2]) return O.apply(n, t.getElementsByTagName(e)), n; if ((r = l[3]) && h.getElementsByClassName && t.getElementsByClassName) return O.apply(n, t.getElementsByClassName(r)), n }
                if (h.qsa && !I[e + " "] && (!g || !g.test(e))) { if (1 !== d) f = t, u = e;
                    else if ("object" !== t.nodeName.toLowerCase()) { for ((a = t.getAttribute("id")) ? a = a.replace(te, ne) : t.setAttribute("id", a = x), o = (c = p(e)).length; o--;) c[o] = "#" + a + " " + ve(c[o]);
                        u = c.join(","), f = Z.test(e) && me(t.parentNode) || t } if (u) try { return O.apply(n, f.querySelectorAll(u)), n } catch (e) {} finally { a === x && t.removeAttribute("id") } } } return m(e.replace(Y, "$1"), t, n, i) }

        function se() { var i = []; return function e(t, n) { return i.push(t + " ") > _.cacheLength && delete e[i.shift()], e[t + " "] = n } }

        function ae(e) { return e[x] = !0, e }

        function le(e) { var t = E.createElement("fieldset"); try { return !!e(t) } catch (e) { return !1 } finally { t.parentNode && t.parentNode.removeChild(t), t = null } }

        function ce(e, t) { for (var n = e.split("|"), i = n.length; i--;) _.attrHandle[n[i]] = t }

        function ue(e, t) { var n = t && e,
                i = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex; if (i) return i; if (n)
                for (; n = n.nextSibling;)
                    if (n === t) return -1;
            return e ? 1 : -1 }

        function fe(t) { return function(e) { return "input" === e.nodeName.toLowerCase() && e.type === t } }

        function de(n) { return function(e) { var t = e.nodeName.toLowerCase(); return ("input" === t || "button" === t) && e.type === n } }

        function he(t) { return function(e) { return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && re(e) === t : e.disabled === t : "label" in e && e.disabled === t } }

        function pe(s) { return ae(function(o) { return o = +o, ae(function(e, t) { for (var n, i = s([], e.length, o), r = i.length; r--;) e[n = i[r]] && (e[n] = !(t[n] = e[n])) }) }) }

        function me(e) { return e && void 0 !== e.getElementsByTagName && e } for (e in h = oe.support = {}, r = oe.isXML = function(e) { var t = e && (e.ownerDocument || e).documentElement; return !!t && "HTML" !== t.nodeName }, C = oe.setDocument = function(e) { var t, n, i = e ? e.ownerDocument || e : y; return i !== E && 9 === i.nodeType && i.documentElement && (s = (E = i).documentElement, T = !r(E), y !== E && (n = E.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", ie, !1) : n.attachEvent && n.attachEvent("onunload", ie)), h.attributes = le(function(e) { return e.className = "i", !e.getAttribute("className") }), h.getElementsByTagName = le(function(e) { return e.appendChild(E.createComment("")), !e.getElementsByTagName("*").length }), h.getElementsByClassName = V.test(E.getElementsByClassName), h.getById = le(function(e) { return s.appendChild(e).id = x, !E.getElementsByName || !E.getElementsByName(x).length }), h.getById ? (_.filter.ID = function(e) { var t = e.replace(J, ee); return function(e) { return e.getAttribute("id") === t } }, _.find.ID = function(e, t) { if (void 0 !== t.getElementById && T) { var n = t.getElementById(e); return n ? [n] : [] } }) : (_.filter.ID = function(e) { var n = e.replace(J, ee); return function(e) { var t = void 0 !== e.getAttributeNode && e.getAttributeNode("id"); return t && t.value === n } }, _.find.ID = function(e, t) { if (void 0 !== t.getElementById && T) { var n, i, r, o = t.getElementById(e); if (o) { if ((n = o.getAttributeNode("id")) && n.value === e) return [o]; for (r = t.getElementsByName(e), i = 0; o = r[i++];)
                                if ((n = o.getAttributeNode("id")) && n.value === e) return [o] } return [] } }), _.find.TAG = h.getElementsByTagName ? function(e, t) { return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : h.qsa ? t.querySelectorAll(e) : void 0 } : function(e, t) { var n, i = [],
                        r = 0,
                        o = t.getElementsByTagName(e); if ("*" !== e) return o; for (; n = o[r++];) 1 === n.nodeType && i.push(n); return i }, _.find.CLASS = h.getElementsByClassName && function(e, t) { if (void 0 !== t.getElementsByClassName && T) return t.getElementsByClassName(e) }, a = [], g = [], (h.qsa = V.test(E.querySelectorAll)) && (le(function(e) { s.appendChild(e).innerHTML = "<a id='" + x + "'></a><select id='" + x + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=" + H + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || g.push("\\[" + H + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + x + "-]").length || g.push("~="), e.querySelectorAll(":checked").length || g.push(":checked"), e.querySelectorAll("a#" + x + "+*").length || g.push(".#.+[+~]") }), le(function(e) { e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>"; var t = E.createElement("input");
                    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && g.push("name" + H + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), s.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), g.push(",.*:") })), (h.matchesSelector = V.test(u = s.matches || s.webkitMatchesSelector || s.mozMatchesSelector || s.oMatchesSelector || s.msMatchesSelector)) && le(function(e) { h.disconnectedMatch = u.call(e, "*"), u.call(e, "[s!='']:x"), a.push("!=", M) }), g = g.length && new RegExp(g.join("|")), a = a.length && new RegExp(a.join("|")), t = V.test(s.compareDocumentPosition), v = t || V.test(s.contains) ? function(e, t) { var n = 9 === e.nodeType ? e.documentElement : e,
                        i = t && t.parentNode; return e === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(i))) } : function(e, t) { if (t)
                        for (; t = t.parentNode;)
                            if (t === e) return !0;
                    return !1 }, A = t ? function(e, t) { if (e === t) return c = !0, 0; var n = !e.compareDocumentPosition - !t.compareDocumentPosition; return n || (1 & (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !h.sortDetached && t.compareDocumentPosition(e) === n ? e === E || e.ownerDocument === y && v(y, e) ? -1 : t === E || t.ownerDocument === y && v(y, t) ? 1 : l ? j(l, e) - j(l, t) : 0 : 4 & n ? -1 : 1) } : function(e, t) { if (e === t) return c = !0, 0; var n, i = 0,
                        r = e.parentNode,
                        o = t.parentNode,
                        s = [e],
                        a = [t]; if (!r || !o) return e === E ? -1 : t === E ? 1 : r ? -1 : o ? 1 : l ? j(l, e) - j(l, t) : 0; if (r === o) return ue(e, t); for (n = e; n = n.parentNode;) s.unshift(n); for (n = t; n = n.parentNode;) a.unshift(n); for (; s[i] === a[i];) i++; return i ? ue(s[i], a[i]) : s[i] === y ? -1 : a[i] === y ? 1 : 0 }), E }, oe.matches = function(e, t) { return oe(e, null, null, t) }, oe.matchesSelector = function(e, t) { if ((e.ownerDocument || e) !== E && C(e), t = t.replace($, "='$1']"), h.matchesSelector && T && !I[t + " "] && (!a || !a.test(t)) && (!g || !g.test(t))) try { var n = u.call(e, t); if (n || h.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n } catch (e) {}
                return 0 < oe(t, E, null, [e]).length }, oe.contains = function(e, t) { return (e.ownerDocument || e) !== E && C(e), v(e, t) }, oe.attr = function(e, t) {
                (e.ownerDocument || e) !== E && C(e); var n = _.attrHandle[t.toLowerCase()],
                    i = n && D.call(_.attrHandle, t.toLowerCase()) ? n(e, t, !T) : void 0; return void 0 !== i ? i : h.attributes || !T ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null }, oe.escape = function(e) { return (e + "").replace(te, ne) }, oe.error = function(e) { throw new Error("Syntax error, unrecognized expression: " + e) }, oe.uniqueSort = function(e) { var t, n = [],
                    i = 0,
                    r = 0; if (c = !h.detectDuplicates, l = !h.sortStable && e.slice(0), e.sort(A), c) { for (; t = e[r++];) t === e[r] && (i = n.push(r)); for (; i--;) e.splice(n[i], 1) } return l = null, e }, o = oe.getText = function(e) { var t, n = "",
                    i = 0,
                    r = e.nodeType; if (r) { if (1 === r || 9 === r || 11 === r) { if ("string" == typeof e.textContent) return e.textContent; for (e = e.firstChild; e; e = e.nextSibling) n += o(e) } else if (3 === r || 4 === r) return e.nodeValue } else
                    for (; t = e[i++];) n += o(t); return n }, (_ = oe.selectors = { cacheLength: 50, createPseudo: ae, match: z, attrHandle: {}, find: {}, relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } }, preFilter: { ATTR: function(e) { return e[1] = e[1].replace(J, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(J, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4) }, CHILD: function(e) { return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e }, PSEUDO: function(e) { var t, n = !e[6] && e[2]; return z.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && F.test(n) && (t = p(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3)) } }, filter: { TAG: function(e) { var t = e.replace(J, ee).toLowerCase(); return "*" === e ? function() { return !0 } : function(e) { return e.nodeName && e.nodeName.toLowerCase() === t } }, CLASS: function(e) { var t = d[e + " "]; return t || (t = new RegExp("(^|" + H + ")" + e + "(" + H + "|$)")) && d(e, function(e) { return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "") }) }, ATTR: function(n, i, r) { return function(e) { var t = oe.attr(e, n); return null == t ? "!=" === i : !i || (t += "", "=" === i ? t === r : "!=" === i ? t !== r : "^=" === i ? r && 0 === t.indexOf(r) : "*=" === i ? r && -1 < t.indexOf(r) : "$=" === i ? r && t.slice(-r.length) === r : "~=" === i ? -1 < (" " + t.replace(q, " ") + " ").indexOf(r) : "|=" === i && (t === r || t.slice(0, r.length + 1) === r + "-")) } }, CHILD: function(p, e, t, m, g) { var v = "nth" !== p.slice(0, 3),
                            y = "last" !== p.slice(-4),
                            b = "of-type" === e; return 1 === m && 0 === g ? function(e) { return !!e.parentNode } : function(e, t, n) { var i, r, o, s, a, l, c = v !== y ? "nextSibling" : "previousSibling",
                                u = e.parentNode,
                                f = b && e.nodeName.toLowerCase(),
                                d = !n && !b,
                                h = !1; if (u) { if (v) { for (; c;) { for (s = e; s = s[c];)
                                            if (b ? s.nodeName.toLowerCase() === f : 1 === s.nodeType) return !1;
                                        l = c = "only" === p && !l && "nextSibling" } return !0 } if (l = [y ? u.firstChild : u.lastChild], y && d) { for (h = (a = (i = (r = (o = (s = u)[x] || (s[x] = {}))[s.uniqueID] || (o[s.uniqueID] = {}))[p] || [])[0] === S && i[1]) && i[2], s = a && u.childNodes[a]; s = ++a && s && s[c] || (h = a = 0) || l.pop();)
                                        if (1 === s.nodeType && ++h && s === e) { r[p] = [S, a, h]; break } } else if (d && (h = a = (i = (r = (o = (s = e)[x] || (s[x] = {}))[s.uniqueID] || (o[s.uniqueID] = {}))[p] || [])[0] === S && i[1]), !1 === h)
                                    for (;
                                        (s = ++a && s && s[c] || (h = a = 0) || l.pop()) && ((b ? s.nodeName.toLowerCase() !== f : 1 !== s.nodeType) || !++h || (d && ((r = (o = s[x] || (s[x] = {}))[s.uniqueID] || (o[s.uniqueID] = {}))[p] = [S, h]), s !== e));); return (h -= g) === m || h % m == 0 && 0 <= h / m } } }, PSEUDO: function(e, o) { var t, s = _.pseudos[e] || _.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e); return s[x] ? s(o) : 1 < s.length ? (t = [e, e, "", o], _.setFilters.hasOwnProperty(e.toLowerCase()) ? ae(function(e, t) { for (var n, i = s(e, o), r = i.length; r--;) e[n = j(e, i[r])] = !(t[n] = i[r]) }) : function(e) { return s(e, 0, t) }) : s } }, pseudos: { not: ae(function(e) { var i = [],
                            r = [],
                            a = f(e.replace(Y, "$1")); return a[x] ? ae(function(e, t, n, i) { for (var r, o = a(e, null, i, []), s = e.length; s--;)(r = o[s]) && (e[s] = !(t[s] = r)) }) : function(e, t, n) { return i[0] = e, a(i, null, n, r), i[0] = null, !r.pop() } }), has: ae(function(t) { return function(e) { return 0 < oe(t, e).length } }), contains: ae(function(t) { return t = t.replace(J, ee),
                            function(e) { return -1 < (e.textContent || e.innerText || o(e)).indexOf(t) } }), lang: ae(function(n) { return U.test(n || "") || oe.error("unsupported lang: " + n), n = n.replace(J, ee).toLowerCase(),
                            function(e) { var t;
                                do { if (t = T ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (t = t.toLowerCase()) === n || 0 === t.indexOf(n + "-") } while ((e = e.parentNode) && 1 === e.nodeType); return !1 } }), target: function(e) { var t = n.location && n.location.hash; return t && t.slice(1) === e.id }, root: function(e) { return e === s }, focus: function(e) { return e === E.activeElement && (!E.hasFocus || E.hasFocus()) && !!(e.type || e.href || ~e.tabIndex) }, enabled: he(!1), disabled: he(!0), checked: function(e) { var t = e.nodeName.toLowerCase(); return "input" === t && !!e.checked || "option" === t && !!e.selected }, selected: function(e) { return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected }, empty: function(e) { for (e = e.firstChild; e; e = e.nextSibling)
                            if (e.nodeType < 6) return !1;
                        return !0 }, parent: function(e) { return !_.pseudos.empty(e) }, header: function(e) { return Q.test(e.nodeName) }, input: function(e) { return K.test(e.nodeName) }, button: function(e) { var t = e.nodeName.toLowerCase(); return "input" === t && "button" === e.type || "button" === t }, text: function(e) { var t; return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase()) }, first: pe(function() { return [0] }), last: pe(function(e, t) { return [t - 1] }), eq: pe(function(e, t, n) { return [n < 0 ? n + t : n] }), even: pe(function(e, t) { for (var n = 0; n < t; n += 2) e.push(n); return e }), odd: pe(function(e, t) { for (var n = 1; n < t; n += 2) e.push(n); return e }), lt: pe(function(e, t, n) { for (var i = n < 0 ? n + t : n; 0 <= --i;) e.push(i); return e }), gt: pe(function(e, t, n) { for (var i = n < 0 ? n + t : n; ++i < t;) e.push(i); return e }) } }).pseudos.nth = _.pseudos.eq, { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) _.pseudos[e] = fe(e); for (e in { submit: !0, reset: !0 }) _.pseudos[e] = de(e);

        function ge() {}

        function ve(e) { for (var t = 0, n = e.length, i = ""; t < n; t++) i += e[t].value; return i }

        function ye(a, e, t) { var l = e.dir,
                c = e.next,
                u = c || l,
                f = t && "parentNode" === u,
                d = i++; return e.first ? function(e, t, n) { for (; e = e[l];)
                    if (1 === e.nodeType || f) return a(e, t, n);
                return !1 } : function(e, t, n) { var i, r, o, s = [S, d]; if (n) { for (; e = e[l];)
                        if ((1 === e.nodeType || f) && a(e, t, n)) return !0 } else
                    for (; e = e[l];)
                        if (1 === e.nodeType || f)
                            if (r = (o = e[x] || (e[x] = {}))[e.uniqueID] || (o[e.uniqueID] = {}), c && c === e.nodeName.toLowerCase()) e = e[l] || e;
                            else { if ((i = r[u]) && i[0] === S && i[1] === d) return s[2] = i[2]; if ((r[u] = s)[2] = a(e, t, n)) return !0 } return !1 } }

        function be(r) { return 1 < r.length ? function(e, t, n) { for (var i = r.length; i--;)
                    if (!r[i](e, t, n)) return !1;
                return !0 } : r[0] }

        function _e(e, t, n, i, r) { for (var o, s = [], a = 0, l = e.length, c = null != t; a < l; a++)(o = e[a]) && (n && !n(o, i, r) || (s.push(o), c && t.push(a))); return s }

        function we(h, p, m, g, v, e) { return g && !g[x] && (g = we(g)), v && !v[x] && (v = we(v, e)), ae(function(e, t, n, i) { var r, o, s, a = [],
                    l = [],
                    c = t.length,
                    u = e || function(e, t, n) { for (var i = 0, r = t.length; i < r; i++) oe(e, t[i], n); return n }(p || "*", n.nodeType ? [n] : n, []),
                    f = !h || !e && p ? u : _e(u, a, h, n, i),
                    d = m ? v || (e ? h : c || g) ? [] : t : f; if (m && m(f, d, n, i), g)
                    for (r = _e(d, l), g(r, [], n, i), o = r.length; o--;)(s = r[o]) && (d[l[o]] = !(f[l[o]] = s)); if (e) { if (v || h) { if (v) { for (r = [], o = d.length; o--;)(s = d[o]) && r.push(f[o] = s);
                            v(null, d = [], r, i) } for (o = d.length; o--;)(s = d[o]) && -1 < (r = v ? j(e, s) : a[o]) && (e[r] = !(t[r] = s)) } } else d = _e(d === t ? d.splice(c, d.length) : d), v ? v(null, t, d, i) : O.apply(t, d) }) }

        function Ce(e) { for (var r, t, n, i = e.length, o = _.relative[e[0].type], s = o || _.relative[" "], a = o ? 1 : 0, l = ye(function(e) { return e === r }, s, !0), c = ye(function(e) { return -1 < j(r, e) }, s, !0), u = [function(e, t, n) { var i = !o && (n || t !== w) || ((r = t).nodeType ? l(e, t, n) : c(e, t, n)); return r = null, i }]; a < i; a++)
                if (t = _.relative[e[a].type]) u = [ye(be(u), t)];
                else { if ((t = _.filter[e[a].type].apply(null, e[a].matches))[x]) { for (n = ++a; n < i && !_.relative[e[n].type]; n++); return we(1 < a && be(u), 1 < a && ve(e.slice(0, a - 1).concat({ value: " " === e[a - 2].type ? "*" : "" })).replace(Y, "$1"), t, a < n && Ce(e.slice(a, n)), n < i && Ce(e = e.slice(n)), n < i && ve(e)) }
                    u.push(t) }
            return be(u) } return ge.prototype = _.filters = _.pseudos, _.setFilters = new ge, p = oe.tokenize = function(e, t) { var n, i, r, o, s, a, l, c = b[e + " "]; if (c) return t ? 0 : c.slice(0); for (s = e, a = [], l = _.preFilter; s;) { for (o in n && !(i = X.exec(s)) || (i && (s = s.slice(i[0].length) || s), a.push(r = [])), n = !1, (i = B.exec(s)) && (n = i.shift(), r.push({ value: n, type: i[0].replace(Y, " ") }), s = s.slice(n.length)), _.filter) !(i = z[o].exec(s)) || l[o] && !(i = l[o](i)) || (n = i.shift(), r.push({ value: n, type: o, matches: i }), s = s.slice(n.length)); if (!n) break } return t ? s.length : s ? oe.error(e) : b(e, a).slice(0) }, f = oe.compile = function(e, t) { var n, g, v, y, b, i, r = [],
                o = [],
                s = I[e + " "]; if (!s) { for (t || (t = p(e)), n = t.length; n--;)(s = Ce(t[n]))[x] ? r.push(s) : o.push(s);
                (s = I(e, (g = o, v = r, y = 0 < v.length, b = 0 < g.length, i = function(e, t, n, i, r) { var o, s, a, l = 0,
                        c = "0",
                        u = e && [],
                        f = [],
                        d = w,
                        h = e || b && _.find.TAG("*", r),
                        p = S += null == d ? 1 : Math.random() || .1,
                        m = h.length; for (r && (w = t === E || t || r); c !== m && null != (o = h[c]); c++) { if (b && o) { for (s = 0, t || o.ownerDocument === E || (C(o), n = !T); a = g[s++];)
                                if (a(o, t || E, n)) { i.push(o); break }
                            r && (S = p) }
                        y && ((o = !a && o) && l--, e && u.push(o)) } if (l += c, y && c !== l) { for (s = 0; a = v[s++];) a(u, f, t, n); if (e) { if (0 < l)
                                for (; c--;) u[c] || f[c] || (f[c] = k.call(i));
                            f = _e(f) }
                        O.apply(i, f), r && !e && 0 < f.length && 1 < l + v.length && oe.uniqueSort(i) } return r && (S = p, w = d), u }, y ? ae(i) : i))).selector = e } return s }, m = oe.select = function(e, t, n, i) { var r, o, s, a, l, c = "function" == typeof e && e,
                u = !i && p(e = c.selector || e); if (n = n || [], 1 === u.length) { if (2 < (o = u[0] = u[0].slice(0)).length && "ID" === (s = o[0]).type && 9 === t.nodeType && T && _.relative[o[1].type]) { if (!(t = (_.find.ID(s.matches[0].replace(J, ee), t) || [])[0])) return n;
                    c && (t = t.parentNode), e = e.slice(o.shift().value.length) } for (r = z.needsContext.test(e) ? 0 : o.length; r-- && (s = o[r], !_.relative[a = s.type]);)
                    if ((l = _.find[a]) && (i = l(s.matches[0].replace(J, ee), Z.test(o[0].type) && me(t.parentNode) || t))) { if (o.splice(r, 1), !(e = i.length && ve(o))) return O.apply(n, i), n; break } } return (c || f(e, u))(i, t, !T, n, !t || Z.test(e) && me(t.parentNode) || t), n }, h.sortStable = x.split("").sort(A).join("") === x, h.detectDuplicates = !!c, C(), h.sortDetached = le(function(e) { return 1 & e.compareDocumentPosition(E.createElement("fieldset")) }), le(function(e) { return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href") }) || ce("type|href|height|width", function(e, t, n) { if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2) }), h.attributes && le(function(e) { return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value") }) || ce("value", function(e, t, n) { if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue }), le(function(e) { return null == e.getAttribute("disabled") }) || ce(P, function(e, t, n) { var i; if (!n) return !0 === e[t] ? t.toLowerCase() : (i = e.getAttributeNode(t)) && i.specified ? i.value : null }), oe }(E);
    x.find = h, x.expr = h.selectors, x.expr[":"] = x.expr.pseudos, x.uniqueSort = x.unique = h.uniqueSort, x.text = h.getText, x.isXMLDoc = h.isXML, x.contains = h.contains, x.escapeSelector = h.escape; var p = function(e, t, n) { for (var i = [], r = void 0 !== n;
                (e = e[t]) && 9 !== e.nodeType;)
                if (1 === e.nodeType) { if (r && x(e).is(n)) break;
                    i.push(e) }
            return i },
        C = function(e, t) { for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e); return n },
        S = x.expr.match.needsContext;

    function I(e, t) { return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase() } var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

    function D(e, n, i) { return y(n) ? x.grep(e, function(e, t) { return !!n.call(e, t, e) !== i }) : n.nodeType ? x.grep(e, function(e) { return e === n !== i }) : "string" != typeof n ? x.grep(e, function(e) { return -1 < r.call(n, e) !== i }) : x.filter(n, e, i) }
    x.filter = function(e, t, n) { var i = t[0]; return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === i.nodeType ? x.find.matchesSelector(i, e) ? [i] : [] : x.find.matches(e, x.grep(t, function(e) { return 1 === e.nodeType })) }, x.fn.extend({ find: function(e) { var t, n, i = this.length,
                r = this; if ("string" != typeof e) return this.pushStack(x(e).filter(function() { for (t = 0; t < i; t++)
                    if (x.contains(r[t], this)) return !0 })); for (n = this.pushStack([]), t = 0; t < i; t++) x.find(e, r[t], n); return 1 < i ? x.uniqueSort(n) : n }, filter: function(e) { return this.pushStack(D(this, e || [], !1)) }, not: function(e) { return this.pushStack(D(this, e || [], !0)) }, is: function(e) { return !!D(this, "string" == typeof e && S.test(e) ? x(e) : e || [], !1).length } }); var k, N = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (x.fn.init = function(e, t, n) { var i, r; if (!e) return this; if (n = n || k, "string" != typeof e) return e.nodeType ? (this[0] = e, this.length = 1, this) : y(e) ? void 0 !== n.ready ? n.ready(e) : e(x) : x.makeArray(e, this); if (!(i = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : N.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e); if (i[1]) { if (t = t instanceof x ? t[0] : t, x.merge(this, x.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : T, !0)), A.test(i[1]) && x.isPlainObject(t))
                for (i in t) y(this[i]) ? this[i](t[i]) : this.attr(i, t[i]); return this } return (r = T.getElementById(i[2])) && (this[0] = r, this.length = 1), this }).prototype = x.fn, k = x(T); var O = /^(?:parents|prev(?:Until|All))/,
        L = { children: !0, contents: !0, next: !0, prev: !0 };

    function j(e, t) { for (;
            (e = e[t]) && 1 !== e.nodeType;); return e }
    x.fn.extend({ has: function(e) { var t = x(e, this),
                n = t.length; return this.filter(function() { for (var e = 0; e < n; e++)
                    if (x.contains(this, t[e])) return !0 }) }, closest: function(e, t) { var n, i = 0,
                r = this.length,
                o = [],
                s = "string" != typeof e && x(e); if (!S.test(e))
                for (; i < r; i++)
                    for (n = this[i]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (s ? -1 < s.index(n) : 1 === n.nodeType && x.find.matchesSelector(n, e))) { o.push(n); break }
            return this.pushStack(1 < o.length ? x.uniqueSort(o) : o) }, index: function(e) { return e ? "string" == typeof e ? r.call(x(e), this[0]) : r.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1 }, add: function(e, t) { return this.pushStack(x.uniqueSort(x.merge(this.get(), x(e, t)))) }, addBack: function(e) { return this.add(null == e ? this.prevObject : this.prevObject.filter(e)) } }), x.each({ parent: function(e) { var t = e.parentNode; return t && 11 !== t.nodeType ? t : null }, parents: function(e) { return p(e, "parentNode") }, parentsUntil: function(e, t, n) { return p(e, "parentNode", n) }, next: function(e) { return j(e, "nextSibling") }, prev: function(e) { return j(e, "previousSibling") }, nextAll: function(e) { return p(e, "nextSibling") }, prevAll: function(e) { return p(e, "previousSibling") }, nextUntil: function(e, t, n) { return p(e, "nextSibling", n) }, prevUntil: function(e, t, n) { return p(e, "previousSibling", n) }, siblings: function(e) { return C((e.parentNode || {}).firstChild, e) }, children: function(e) { return C(e.firstChild) }, contents: function(e) { return I(e, "iframe") ? e.contentDocument : (I(e, "template") && (e = e.content || e), x.merge([], e.childNodes)) } }, function(i, r) { x.fn[i] = function(e, t) { var n = x.map(this, r, e); return "Until" !== i.slice(-5) && (t = e), t && "string" == typeof t && (n = x.filter(t, n)), 1 < this.length && (L[i] || x.uniqueSort(n), O.test(i) && n.reverse()), this.pushStack(n) } }); var P = /[^\x20\t\r\n\f]+/g;

    function H(e) { return e }

    function R(e) { throw e }

    function W(e, t, n, i) { var r; try { e && y(r = e.promise) ? r.call(e).done(t).fail(n) : e && y(r = e.then) ? r.call(e, t, n) : t.apply(void 0, [e].slice(i)) } catch (e) { n.apply(void 0, [e]) } }
    x.Callbacks = function(i) { var e, n;
        i = "string" == typeof i ? (e = i, n = {}, x.each(e.match(P) || [], function(e, t) { n[t] = !0 }), n) : x.extend({}, i); var r, t, o, s, a = [],
            l = [],
            c = -1,
            u = function() { for (s = s || i.once, o = r = !0; l.length; c = -1)
                    for (t = l.shift(); ++c < a.length;) !1 === a[c].apply(t[0], t[1]) && i.stopOnFalse && (c = a.length, t = !1);
                i.memory || (t = !1), r = !1, s && (a = t ? [] : "") },
            f = { add: function() { return a && (t && !r && (c = a.length - 1, l.push(t)), function n(e) { x.each(e, function(e, t) { y(t) ? i.unique && f.has(t) || a.push(t) : t && t.length && "string" !== w(t) && n(t) }) }(arguments), t && !r && u()), this }, remove: function() { return x.each(arguments, function(e, t) { for (var n; - 1 < (n = x.inArray(t, a, n));) a.splice(n, 1), n <= c && c-- }), this }, has: function(e) { return e ? -1 < x.inArray(e, a) : 0 < a.length }, empty: function() { return a && (a = []), this }, disable: function() { return s = l = [], a = t = "", this }, disabled: function() { return !a }, lock: function() { return s = l = [], t || r || (a = t = ""), this }, locked: function() { return !!s }, fireWith: function(e, t) { return s || (t = [e, (t = t || []).slice ? t.slice() : t], l.push(t), r || u()), this }, fire: function() { return f.fireWith(this, arguments), this }, fired: function() { return !!o } }; return f }, x.extend({ Deferred: function(e) { var o = [
                    ["notify", "progress", x.Callbacks("memory"), x.Callbacks("memory"), 2],
                    ["resolve", "done", x.Callbacks("once memory"), x.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", x.Callbacks("once memory"), x.Callbacks("once memory"), 1, "rejected"]
                ],
                r = "pending",
                s = { state: function() { return r }, always: function() { return a.done(arguments).fail(arguments), this }, catch: function(e) { return s.then(null, e) }, pipe: function() { var r = arguments; return x.Deferred(function(i) { x.each(o, function(e, t) { var n = y(r[t[4]]) && r[t[4]];
                                a[t[1]](function() { var e = n && n.apply(this, arguments);
                                    e && y(e.promise) ? e.promise().progress(i.notify).done(i.resolve).fail(i.reject) : i[t[0] + "With"](this, n ? [e] : arguments) }) }), r = null }).promise() }, then: function(t, n, i) { var l = 0;

                        function c(r, o, s, a) { return function() { var n = this,
                                    i = arguments,
                                    e = function() { var e, t; if (!(r < l)) { if ((e = s.apply(n, i)) === o.promise()) throw new TypeError("Thenable self-resolution");
                                            t = e && ("object" == typeof e || "function" == typeof e) && e.then, y(t) ? a ? t.call(e, c(l, o, H, a), c(l, o, R, a)) : (l++, t.call(e, c(l, o, H, a), c(l, o, R, a), c(l, o, H, o.notifyWith))) : (s !== H && (n = void 0, i = [e]), (a || o.resolveWith)(n, i)) } },
                                    t = a ? e : function() { try { e() } catch (e) { x.Deferred.exceptionHook && x.Deferred.exceptionHook(e, t.stackTrace), l <= r + 1 && (s !== R && (n = void 0, i = [e]), o.rejectWith(n, i)) } };
                                r ? t() : (x.Deferred.getStackHook && (t.stackTrace = x.Deferred.getStackHook()), E.setTimeout(t)) } } return x.Deferred(function(e) { o[0][3].add(c(0, e, y(i) ? i : H, e.notifyWith)), o[1][3].add(c(0, e, y(t) ? t : H)), o[2][3].add(c(0, e, y(n) ? n : R)) }).promise() }, promise: function(e) { return null != e ? x.extend(e, s) : s } },
                a = {}; return x.each(o, function(e, t) { var n = t[2],
                    i = t[5];
                s[t[1]] = n.add, i && n.add(function() { r = i }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock), n.add(t[3].fire), a[t[0]] = function() { return a[t[0] + "With"](this === a ? void 0 : this, arguments), this }, a[t[0] + "With"] = n.fireWith }), s.promise(a), e && e.call(a, a), a }, when: function(e) { var n = arguments.length,
                t = n,
                i = Array(t),
                r = a.call(arguments),
                o = x.Deferred(),
                s = function(t) { return function(e) { i[t] = this, r[t] = 1 < arguments.length ? a.call(arguments) : e, --n || o.resolveWith(i, r) } }; if (n <= 1 && (W(e, o.done(s(t)).resolve, o.reject, !n), "pending" === o.state() || y(r[t] && r[t].then))) return o.then(); for (; t--;) W(r[t], s(t), o.reject); return o.promise() } }); var M = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    x.Deferred.exceptionHook = function(e, t) { E.console && E.console.warn && e && M.test(e.name) && E.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t) }, x.readyException = function(e) { E.setTimeout(function() { throw e }) }; var q = x.Deferred();

    function Y() { T.removeEventListener("DOMContentLoaded", Y), E.removeEventListener("load", Y), x.ready() }
    x.fn.ready = function(e) { return q.then(e).catch(function(e) { x.readyException(e) }), this }, x.extend({ isReady: !1, readyWait: 1, ready: function(e) {
            (!0 === e ? --x.readyWait : x.isReady) || ((x.isReady = !0) !== e && 0 < --x.readyWait || q.resolveWith(T, [x])) } }), x.ready.then = q.then, "complete" === T.readyState || "loading" !== T.readyState && !T.documentElement.doScroll ? E.setTimeout(x.ready) : (T.addEventListener("DOMContentLoaded", Y), E.addEventListener("load", Y)); var X = function(e, t, n, i, r, o, s) { var a = 0,
                l = e.length,
                c = null == n; if ("object" === w(n))
                for (a in r = !0, n) X(e, t, a, n[a], !0, o, s);
            else if (void 0 !== i && (r = !0, y(i) || (s = !0), c && (t = s ? (t.call(e, i), null) : (c = t, function(e, t, n) { return c.call(x(e), n) })), t))
                for (; a < l; a++) t(e[a], n, s ? i : i.call(e[a], a, t(e[a], n))); return r ? e : c ? t.call(e) : l ? t(e[0], n) : o },
        B = /^-ms-/,
        $ = /-([a-z])/g;

    function F(e, t) { return t.toUpperCase() }

    function U(e) { return e.replace(B, "ms-").replace($, F) } var z = function(e) { return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType };

    function K() { this.expando = x.expando + K.uid++ }
    K.uid = 1, K.prototype = { cache: function(e) { var t = e[this.expando]; return t || (t = {}, z(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t }, set: function(e, t, n) { var i, r = this.cache(e); if ("string" == typeof t) r[U(t)] = n;
            else
                for (i in t) r[U(i)] = t[i]; return r }, get: function(e, t) { return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][U(t)] }, access: function(e, t, n) { return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t) }, remove: function(e, t) { var n, i = e[this.expando]; if (void 0 !== i) { if (void 0 !== t) { n = (t = Array.isArray(t) ? t.map(U) : (t = U(t)) in i ? [t] : t.match(P) || []).length; for (; n--;) delete i[t[n]] }(void 0 === t || x.isEmptyObject(i)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]) } }, hasData: function(e) { var t = e[this.expando]; return void 0 !== t && !x.isEmptyObject(t) } }; var Q = new K,
        V = new K,
        G = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        Z = /[A-Z]/g;

    function J(e, t, n) { var i, r; if (void 0 === n && 1 === e.nodeType)
            if (i = "data-" + t.replace(Z, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(i))) { try { n = "true" === (r = n) || "false" !== r && ("null" === r ? null : r === +r + "" ? +r : G.test(r) ? JSON.parse(r) : r) } catch (e) {}
                V.set(e, t, n) } else n = void 0;
        return n }
    x.extend({ hasData: function(e) { return V.hasData(e) || Q.hasData(e) }, data: function(e, t, n) { return V.access(e, t, n) }, removeData: function(e, t) { V.remove(e, t) }, _data: function(e, t, n) { return Q.access(e, t, n) }, _removeData: function(e, t) { Q.remove(e, t) } }), x.fn.extend({ data: function(n, e) { var t, i, r, o = this[0],
                s = o && o.attributes; if (void 0 !== n) return "object" == typeof n ? this.each(function() { V.set(this, n) }) : X(this, function(e) { var t; if (o && void 0 === e) { if (void 0 !== (t = V.get(o, n))) return t; if (void 0 !== (t = J(o, n))) return t } else this.each(function() { V.set(this, n, e) }) }, null, e, 1 < arguments.length, null, !0); if (this.length && (r = V.get(o), 1 === o.nodeType && !Q.get(o, "hasDataAttrs"))) { for (t = s.length; t--;) s[t] && 0 === (i = s[t].name).indexOf("data-") && (i = U(i.slice(5)), J(o, i, r[i]));
                Q.set(o, "hasDataAttrs", !0) } return r }, removeData: function(e) { return this.each(function() { V.remove(this, e) }) } }), x.extend({ queue: function(e, t, n) { var i; if (e) return t = (t || "fx") + "queue", i = Q.get(e, t), n && (!i || Array.isArray(n) ? i = Q.access(e, t, x.makeArray(n)) : i.push(n)), i || [] }, dequeue: function(e, t) { t = t || "fx"; var n = x.queue(e, t),
                i = n.length,
                r = n.shift(),
                o = x._queueHooks(e, t); "inprogress" === r && (r = n.shift(), i--), r && ("fx" === t && n.unshift("inprogress"), delete o.stop, r.call(e, function() { x.dequeue(e, t) }, o)), !i && o && o.empty.fire() }, _queueHooks: function(e, t) { var n = t + "queueHooks"; return Q.get(e, n) || Q.access(e, n, { empty: x.Callbacks("once memory").add(function() { Q.remove(e, [t + "queue", n]) }) }) } }), x.fn.extend({ queue: function(t, n) { var e = 2; return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? x.queue(this[0], t) : void 0 === n ? this : this.each(function() { var e = x.queue(this, t, n);
                x._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && x.dequeue(this, t) }) }, dequeue: function(e) { return this.each(function() { x.dequeue(this, e) }) }, clearQueue: function(e) { return this.queue(e || "fx", []) }, promise: function(e, t) { var n, i = 1,
                r = x.Deferred(),
                o = this,
                s = this.length,
                a = function() {--i || r.resolveWith(o, [o]) }; for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; s--;)(n = Q.get(o[s], e + "queueHooks")) && n.empty && (i++, n.empty.add(a)); return a(), r.promise(t) } }); var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
        ne = ["Top", "Right", "Bottom", "Left"],
        ie = function(e, t) { return "none" === (e = t || e).style.display || "" === e.style.display && x.contains(e.ownerDocument, e) && "none" === x.css(e, "display") },
        re = function(e, t, n, i) { var r, o, s = {}; for (o in t) s[o] = e.style[o], e.style[o] = t[o]; for (o in r = n.apply(e, i || []), t) e.style[o] = s[o]; return r };

    function oe(e, t, n, i) { var r, o, s = 20,
            a = i ? function() { return i.cur() } : function() { return x.css(e, t, "") },
            l = a(),
            c = n && n[3] || (x.cssNumber[t] ? "" : "px"),
            u = (x.cssNumber[t] || "px" !== c && +l) && te.exec(x.css(e, t)); if (u && u[3] !== c) { for (l /= 2, c = c || u[3], u = +l || 1; s--;) x.style(e, t, u + c), (1 - o) * (1 - (o = a() / l || .5)) <= 0 && (s = 0), u /= o;
            u *= 2, x.style(e, t, u + c), n = n || [] } return n && (u = +u || +l || 0, r = n[1] ? u + (n[1] + 1) * n[2] : +n[2], i && (i.unit = c, i.start = u, i.end = r)), r } var se = {};

    function ae(e, t) { for (var n, i, r = [], o = 0, s = e.length; o < s; o++)(i = e[o]).style && (n = i.style.display, t ? ("none" === n && (r[o] = Q.get(i, "display") || null, r[o] || (i.style.display = "")), "" === i.style.display && ie(i) && (r[o] = (f = c = l = void 0, c = (a = i).ownerDocument, u = a.nodeName, (f = se[u]) || (l = c.body.appendChild(c.createElement(u)), f = x.css(l, "display"), l.parentNode.removeChild(l), "none" === f && (f = "block"), se[u] = f)))) : "none" !== n && (r[o] = "none", Q.set(i, "display", n))); var a, l, c, u, f; for (o = 0; o < s; o++) null != r[o] && (e[o].style.display = r[o]); return e }
    x.fn.extend({ show: function() { return ae(this, !0) }, hide: function() { return ae(this) }, toggle: function(e) { return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() { ie(this) ? x(this).show() : x(this).hide() }) } }); var le = /^(?:checkbox|radio)$/i,
        ce = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
        ue = /^$|^module$|\/(?:java|ecma)script/i,
        fe = { option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] };

    function de(e, t) { var n; return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && I(e, t) ? x.merge([e], n) : n }

    function he(e, t) { for (var n = 0, i = e.length; n < i; n++) Q.set(e[n], "globalEval", !t || Q.get(t[n], "globalEval")) }
    fe.optgroup = fe.option, fe.tbody = fe.tfoot = fe.colgroup = fe.caption = fe.thead, fe.th = fe.td; var pe, me, ge = /<|&#?\w+;/;

    function ve(e, t, n, i, r) { for (var o, s, a, l, c, u, f = t.createDocumentFragment(), d = [], h = 0, p = e.length; h < p; h++)
            if ((o = e[h]) || 0 === o)
                if ("object" === w(o)) x.merge(d, o.nodeType ? [o] : o);
                else if (ge.test(o)) { for (s = s || f.appendChild(t.createElement("div")), a = (ce.exec(o) || ["", ""])[1].toLowerCase(), l = fe[a] || fe._default, s.innerHTML = l[1] + x.htmlPrefilter(o) + l[2], u = l[0]; u--;) s = s.lastChild;
            x.merge(d, s.childNodes), (s = f.firstChild).textContent = "" } else d.push(t.createTextNode(o)); for (f.textContent = "", h = 0; o = d[h++];)
            if (i && -1 < x.inArray(o, i)) r && r.push(o);
            else if (c = x.contains(o.ownerDocument, o), s = de(f.appendChild(o), "script"), c && he(s), n)
            for (u = 0; o = s[u++];) ue.test(o.type || "") && n.push(o); return f }
    pe = T.createDocumentFragment().appendChild(T.createElement("div")), (me = T.createElement("input")).setAttribute("type", "radio"), me.setAttribute("checked", "checked"), me.setAttribute("name", "t"), pe.appendChild(me), v.checkClone = pe.cloneNode(!0).cloneNode(!0).lastChild.checked, pe.innerHTML = "<textarea>x</textarea>", v.noCloneChecked = !!pe.cloneNode(!0).lastChild.defaultValue; var ye = T.documentElement,
        be = /^key/,
        _e = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        we = /^([^.]*)(?:\.(.+)|)/;

    function Ce() { return !0 }

    function Ee() { return !1 }

    function Te() { try { return T.activeElement } catch (e) {} }

    function xe(e, t, n, i, r, o) { var s, a; if ("object" == typeof t) { for (a in "string" != typeof n && (i = i || n, n = void 0), t) xe(e, a, n, i, t[a], o); return e } if (null == i && null == r ? (r = n, i = n = void 0) : null == r && ("string" == typeof n ? (r = i, i = void 0) : (r = i, i = n, n = void 0)), !1 === r) r = Ee;
        else if (!r) return e; return 1 === o && (s = r, (r = function(e) { return x().off(e), s.apply(this, arguments) }).guid = s.guid || (s.guid = x.guid++)), e.each(function() { x.event.add(this, t, r, i, n) }) }
    x.event = { global: {}, add: function(t, e, n, i, r) { var o, s, a, l, c, u, f, d, h, p, m, g = Q.get(t); if (g)
                for (n.handler && (n = (o = n).handler, r = o.selector), r && x.find.matchesSelector(ye, r), n.guid || (n.guid = x.guid++), (l = g.events) || (l = g.events = {}), (s = g.handle) || (s = g.handle = function(e) { return void 0 !== x && x.event.triggered !== e.type ? x.event.dispatch.apply(t, arguments) : void 0 }), c = (e = (e || "").match(P) || [""]).length; c--;) h = m = (a = we.exec(e[c]) || [])[1], p = (a[2] || "").split(".").sort(), h && (f = x.event.special[h] || {}, h = (r ? f.delegateType : f.bindType) || h, f = x.event.special[h] || {}, u = x.extend({ type: h, origType: m, data: i, handler: n, guid: n.guid, selector: r, needsContext: r && x.expr.match.needsContext.test(r), namespace: p.join(".") }, o), (d = l[h]) || ((d = l[h] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(t, i, p, s) || t.addEventListener && t.addEventListener(h, s)), f.add && (f.add.call(t, u), u.handler.guid || (u.handler.guid = n.guid)), r ? d.splice(d.delegateCount++, 0, u) : d.push(u), x.event.global[h] = !0) }, remove: function(e, t, n, i, r) { var o, s, a, l, c, u, f, d, h, p, m, g = Q.hasData(e) && Q.get(e); if (g && (l = g.events)) { for (c = (t = (t || "").match(P) || [""]).length; c--;)
                    if (h = m = (a = we.exec(t[c]) || [])[1], p = (a[2] || "").split(".").sort(), h) { for (f = x.event.special[h] || {}, d = l[h = (i ? f.delegateType : f.bindType) || h] || [], a = a[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = o = d.length; o--;) u = d[o], !r && m !== u.origType || n && n.guid !== u.guid || a && !a.test(u.namespace) || i && i !== u.selector && ("**" !== i || !u.selector) || (d.splice(o, 1), u.selector && d.delegateCount--, f.remove && f.remove.call(e, u));
                        s && !d.length && (f.teardown && !1 !== f.teardown.call(e, p, g.handle) || x.removeEvent(e, h, g.handle), delete l[h]) } else
                        for (h in l) x.event.remove(e, h + t[c], n, i, !0);
                x.isEmptyObject(l) && Q.remove(e, "handle events") } }, dispatch: function(e) { var t, n, i, r, o, s, a = x.event.fix(e),
                l = new Array(arguments.length),
                c = (Q.get(this, "events") || {})[a.type] || [],
                u = x.event.special[a.type] || {}; for (l[0] = a, t = 1; t < arguments.length; t++) l[t] = arguments[t]; if (a.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, a)) { for (s = x.event.handlers.call(this, a, c), t = 0;
                    (r = s[t++]) && !a.isPropagationStopped();)
                    for (a.currentTarget = r.elem, n = 0;
                        (o = r.handlers[n++]) && !a.isImmediatePropagationStopped();) a.rnamespace && !a.rnamespace.test(o.namespace) || (a.handleObj = o, a.data = o.data, void 0 !== (i = ((x.event.special[o.origType] || {}).handle || o.handler).apply(r.elem, l)) && !1 === (a.result = i) && (a.preventDefault(), a.stopPropagation())); return u.postDispatch && u.postDispatch.call(this, a), a.result } }, handlers: function(e, t) { var n, i, r, o, s, a = [],
                l = t.delegateCount,
                c = e.target; if (l && c.nodeType && !("click" === e.type && 1 <= e.button))
                for (; c !== this; c = c.parentNode || this)
                    if (1 === c.nodeType && ("click" !== e.type || !0 !== c.disabled)) { for (o = [], s = {}, n = 0; n < l; n++) void 0 === s[r = (i = t[n]).selector + " "] && (s[r] = i.needsContext ? -1 < x(r, this).index(c) : x.find(r, this, null, [c]).length), s[r] && o.push(i);
                        o.length && a.push({ elem: c, handlers: o }) }
            return c = this, l < t.length && a.push({ elem: c, handlers: t.slice(l) }), a }, addProp: function(t, e) { Object.defineProperty(x.Event.prototype, t, { enumerable: !0, configurable: !0, get: y(e) ? function() { if (this.originalEvent) return e(this.originalEvent) } : function() { if (this.originalEvent) return this.originalEvent[t] }, set: function(e) { Object.defineProperty(this, t, { enumerable: !0, configurable: !0, writable: !0, value: e }) } }) }, fix: function(e) { return e[x.expando] ? e : new x.Event(e) }, special: { load: { noBubble: !0 }, focus: { trigger: function() { if (this !== Te() && this.focus) return this.focus(), !1 }, delegateType: "focusin" }, blur: { trigger: function() { if (this === Te() && this.blur) return this.blur(), !1 }, delegateType: "focusout" }, click: { trigger: function() { if ("checkbox" === this.type && this.click && I(this, "input")) return this.click(), !1 }, _default: function(e) { return I(e.target, "a") } }, beforeunload: { postDispatch: function(e) { void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result) } } } }, x.removeEvent = function(e, t, n) { e.removeEventListener && e.removeEventListener(t, n) }, x.Event = function(e, t) { if (!(this instanceof x.Event)) return new x.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ce : Ee, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && x.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[x.expando] = !0 }, x.Event.prototype = { constructor: x.Event, isDefaultPrevented: Ee, isPropagationStopped: Ee, isImmediatePropagationStopped: Ee, isSimulated: !1, preventDefault: function() { var e = this.originalEvent;
            this.isDefaultPrevented = Ce, e && !this.isSimulated && e.preventDefault() }, stopPropagation: function() { var e = this.originalEvent;
            this.isPropagationStopped = Ce, e && !this.isSimulated && e.stopPropagation() }, stopImmediatePropagation: function() { var e = this.originalEvent;
            this.isImmediatePropagationStopped = Ce, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation() } }, x.each({ altKey: !0, bubbles: !0, cancelable: !0, changedTouches: !0, ctrlKey: !0, detail: !0, eventPhase: !0, metaKey: !0, pageX: !0, pageY: !0, shiftKey: !0, view: !0, char: !0, charCode: !0, key: !0, keyCode: !0, button: !0, buttons: !0, clientX: !0, clientY: !0, offsetX: !0, offsetY: !0, pointerId: !0, pointerType: !0, screenX: !0, screenY: !0, targetTouches: !0, toElement: !0, touches: !0, which: function(e) { var t = e.button; return null == e.which && be.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && _e.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which } }, x.event.addProp), x.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function(e, r) { x.event.special[e] = { delegateType: r, bindType: r, handle: function(e) { var t, n = e.relatedTarget,
                    i = e.handleObj; return n && (n === this || x.contains(this, n)) || (e.type = i.origType, t = i.handler.apply(this, arguments), e.type = r), t } } }), x.fn.extend({ on: function(e, t, n, i) { return xe(this, e, t, n, i) }, one: function(e, t, n, i) { return xe(this, e, t, n, i, 1) }, off: function(e, t, n) { var i, r; if (e && e.preventDefault && e.handleObj) return i = e.handleObj, x(e.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this; if ("object" != typeof e) return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Ee), this.each(function() { x.event.remove(this, e, n, t) }); for (r in e) this.off(r, t, e[r]); return this } }); var Se = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        Ie = /<script|<style|<link/i,
        Ae = /checked\s*(?:[^=]|=\s*.checked.)/i,
        De = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

    function ke(e, t) { return I(e, "table") && I(11 !== t.nodeType ? t : t.firstChild, "tr") && x(e).children("tbody")[0] || e }

    function Ne(e) { return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e }

    function Oe(e) { return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e }

    function Le(e, t) { var n, i, r, o, s, a, l, c; if (1 === t.nodeType) { if (Q.hasData(e) && (o = Q.access(e), s = Q.set(t, o), c = o.events))
                for (r in delete s.handle, s.events = {}, c)
                    for (n = 0, i = c[r].length; n < i; n++) x.event.add(t, r, c[r][n]);
            V.hasData(e) && (a = V.access(e), l = x.extend({}, a), V.set(t, l)) } }

    function je(n, i, r, o) { i = m.apply([], i); var e, t, s, a, l, c, u = 0,
            f = n.length,
            d = f - 1,
            h = i[0],
            p = y(h); if (p || 1 < f && "string" == typeof h && !v.checkClone && Ae.test(h)) return n.each(function(e) { var t = n.eq(e);
            p && (i[0] = h.call(this, e, t.html())), je(t, i, r, o) }); if (f && (t = (e = ve(i, n[0].ownerDocument, !1, n, o)).firstChild, 1 === e.childNodes.length && (e = t), t || o)) { for (a = (s = x.map(de(e, "script"), Ne)).length; u < f; u++) l = e, u !== d && (l = x.clone(l, !0, !0), a && x.merge(s, de(l, "script"))), r.call(n[u], l, u); if (a)
                for (c = s[s.length - 1].ownerDocument, x.map(s, Oe), u = 0; u < a; u++) l = s[u], ue.test(l.type || "") && !Q.access(l, "globalEval") && x.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? x._evalUrl && x._evalUrl(l.src) : _(l.textContent.replace(De, ""), c, l)) } return n }

    function Pe(e, t, n) { for (var i, r = t ? x.filter(t, e) : e, o = 0; null != (i = r[o]); o++) n || 1 !== i.nodeType || x.cleanData(de(i)), i.parentNode && (n && x.contains(i.ownerDocument, i) && he(de(i, "script")), i.parentNode.removeChild(i)); return e }
    x.extend({ htmlPrefilter: function(e) { return e.replace(Se, "<$1></$2>") }, clone: function(e, t, n) { var i, r, o, s, a, l, c, u = e.cloneNode(!0),
                f = x.contains(e.ownerDocument, e); if (!(v.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || x.isXMLDoc(e)))
                for (s = de(u), i = 0, r = (o = de(e)).length; i < r; i++) a = o[i], l = s[i], void 0, "input" === (c = l.nodeName.toLowerCase()) && le.test(a.type) ? l.checked = a.checked : "input" !== c && "textarea" !== c || (l.defaultValue = a.defaultValue); if (t)
                if (n)
                    for (o = o || de(e), s = s || de(u), i = 0, r = o.length; i < r; i++) Le(o[i], s[i]);
                else Le(e, u);
            return 0 < (s = de(u, "script")).length && he(s, !f && de(e, "script")), u }, cleanData: function(e) { for (var t, n, i, r = x.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (z(n)) { if (t = n[Q.expando]) { if (t.events)
                            for (i in t.events) r[i] ? x.event.remove(n, i) : x.removeEvent(n, i, t.handle);
                        n[Q.expando] = void 0 }
                    n[V.expando] && (n[V.expando] = void 0) } } }), x.fn.extend({ detach: function(e) { return Pe(this, e, !0) }, remove: function(e) { return Pe(this, e) }, text: function(e) { return X(this, function(e) { return void 0 === e ? x.text(this) : this.empty().each(function() { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e) }) }, null, e, arguments.length) }, append: function() { return je(this, arguments, function(e) { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || ke(this, e).appendChild(e) }) }, prepend: function() { return je(this, arguments, function(e) { if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) { var t = ke(this, e);
                    t.insertBefore(e, t.firstChild) } }) }, before: function() { return je(this, arguments, function(e) { this.parentNode && this.parentNode.insertBefore(e, this) }) }, after: function() { return je(this, arguments, function(e) { this.parentNode && this.parentNode.insertBefore(e, this.nextSibling) }) }, empty: function() { for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (x.cleanData(de(e, !1)), e.textContent = ""); return this }, clone: function(e, t) { return e = null != e && e, t = null == t ? e : t, this.map(function() { return x.clone(this, e, t) }) }, html: function(e) { return X(this, function(e) { var t = this[0] || {},
                    n = 0,
                    i = this.length; if (void 0 === e && 1 === t.nodeType) return t.innerHTML; if ("string" == typeof e && !Ie.test(e) && !fe[(ce.exec(e) || ["", ""])[1].toLowerCase()]) { e = x.htmlPrefilter(e); try { for (; n < i; n++) 1 === (t = this[n] || {}).nodeType && (x.cleanData(de(t, !1)), t.innerHTML = e);
                        t = 0 } catch (e) {} }
                t && this.empty().append(e) }, null, e, arguments.length) }, replaceWith: function() { var n = []; return je(this, arguments, function(e) { var t = this.parentNode;
                x.inArray(this, n) < 0 && (x.cleanData(de(this)), t && t.replaceChild(e, this)) }, n) } }), x.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function(e, s) { x.fn[e] = function(e) { for (var t, n = [], i = x(e), r = i.length - 1, o = 0; o <= r; o++) t = o === r ? this : this.clone(!0), x(i[o])[s](t), l.apply(n, t.get()); return this.pushStack(n) } }); var He = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
        Re = function(e) { var t = e.ownerDocument.defaultView; return t && t.opener || (t = E), t.getComputedStyle(e) },
        We = new RegExp(ne.join("|"), "i");

    function Me(e, t, n) { var i, r, o, s, a = e.style; return (n = n || Re(e)) && ("" !== (s = n.getPropertyValue(t) || n[t]) || x.contains(e.ownerDocument, e) || (s = x.style(e, t)), !v.pixelBoxStyles() && He.test(s) && We.test(t) && (i = a.width, r = a.minWidth, o = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = n.width, a.width = i, a.minWidth = r, a.maxWidth = o)), void 0 !== s ? s + "" : s }

    function qe(e, t) { return { get: function() { if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get } } }! function() {
        function e() { if (l) { a.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", l.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", ye.appendChild(a).appendChild(l); var e = E.getComputedStyle(l);
                n = "1%" !== e.top, s = 12 === t(e.marginLeft), l.style.right = "60%", o = 36 === t(e.right), i = 36 === t(e.width), l.style.position = "absolute", r = 36 === l.offsetWidth || "absolute", ye.removeChild(a), l = null } }

        function t(e) { return Math.round(parseFloat(e)) } var n, i, r, o, s, a = T.createElement("div"),
            l = T.createElement("div");
        l.style && (l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", v.clearCloneStyle = "content-box" === l.style.backgroundClip, x.extend(v, { boxSizingReliable: function() { return e(), i }, pixelBoxStyles: function() { return e(), o }, pixelPosition: function() { return e(), n }, reliableMarginLeft: function() { return e(), s }, scrollboxSize: function() { return e(), r } })) }(); var Ye = /^(none|table(?!-c[ea]).+)/,
        Xe = /^--/,
        Be = { position: "absolute", visibility: "hidden", display: "block" },
        $e = { letterSpacing: "0", fontWeight: "400" },
        Fe = ["Webkit", "Moz", "ms"],
        Ue = T.createElement("div").style;

    function ze(e) { var t = x.cssProps[e]; return t || (t = x.cssProps[e] = function(e) { if (e in Ue) return e; for (var t = e[0].toUpperCase() + e.slice(1), n = Fe.length; n--;)
                if ((e = Fe[n] + t) in Ue) return e }(e) || e), t }

    function Ke(e, t, n) { var i = te.exec(t); return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : t }

    function Qe(e, t, n, i, r, o) { var s = "width" === t ? 1 : 0,
            a = 0,
            l = 0; if (n === (i ? "border" : "content")) return 0; for (; s < 4; s += 2) "margin" === n && (l += x.css(e, n + ne[s], !0, r)), i ? ("content" === n && (l -= x.css(e, "padding" + ne[s], !0, r)), "margin" !== n && (l -= x.css(e, "border" + ne[s] + "Width", !0, r))) : (l += x.css(e, "padding" + ne[s], !0, r), "padding" !== n ? l += x.css(e, "border" + ne[s] + "Width", !0, r) : a += x.css(e, "border" + ne[s] + "Width", !0, r)); return !i && 0 <= o && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - l - a - .5))), l }

    function Ve(e, t, n) { var i = Re(e),
            r = Me(e, t, i),
            o = "border-box" === x.css(e, "boxSizing", !1, i),
            s = o; if (He.test(r)) { if (!n) return r;
            r = "auto" } return s = s && (v.boxSizingReliable() || r === e.style[t]), ("auto" === r || !parseFloat(r) && "inline" === x.css(e, "display", !1, i)) && (r = e["offset" + t[0].toUpperCase() + t.slice(1)], s = !0), (r = parseFloat(r) || 0) + Qe(e, t, n || (o ? "border" : "content"), s, i, r) + "px" }

    function Ge(e, t, n, i, r) { return new Ge.prototype.init(e, t, n, i, r) }
    x.extend({ cssHooks: { opacity: { get: function(e, t) { if (t) { var n = Me(e, "opacity"); return "" === n ? "1" : n } } } }, cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 }, cssProps: {}, style: function(e, t, n, i) { if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) { var r, o, s, a = U(t),
                    l = Xe.test(t),
                    c = e.style; if (l || (t = ze(a)), s = x.cssHooks[t] || x.cssHooks[a], void 0 === n) return s && "get" in s && void 0 !== (r = s.get(e, !1, i)) ? r : c[t]; "string" == (o = typeof n) && (r = te.exec(n)) && r[1] && (n = oe(e, t, r), o = "number"), null != n && n == n && ("number" === o && (n += r && r[3] || (x.cssNumber[a] ? "" : "px")), v.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (c[t] = "inherit"), s && "set" in s && void 0 === (n = s.set(e, n, i)) || (l ? c.setProperty(t, n) : c[t] = n)) } }, css: function(e, t, n, i) { var r, o, s, a = U(t); return Xe.test(t) || (t = ze(a)), (s = x.cssHooks[t] || x.cssHooks[a]) && "get" in s && (r = s.get(e, !0, n)), void 0 === r && (r = Me(e, t, i)), "normal" === r && t in $e && (r = $e[t]), "" === n || n ? (o = parseFloat(r), !0 === n || isFinite(o) ? o || 0 : r) : r } }), x.each(["height", "width"], function(e, a) { x.cssHooks[a] = { get: function(e, t, n) { if (t) return !Ye.test(x.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Ve(e, a, n) : re(e, Be, function() { return Ve(e, a, n) }) }, set: function(e, t, n) { var i, r = Re(e),
                    o = "border-box" === x.css(e, "boxSizing", !1, r),
                    s = n && Qe(e, a, n, o, r); return o && v.scrollboxSize() === r.position && (s -= Math.ceil(e["offset" + a[0].toUpperCase() + a.slice(1)] - parseFloat(r[a]) - Qe(e, a, "border", !1, r) - .5)), s && (i = te.exec(t)) && "px" !== (i[3] || "px") && (e.style[a] = t, t = x.css(e, a)), Ke(0, t, s) } } }), x.cssHooks.marginLeft = qe(v.reliableMarginLeft, function(e, t) { if (t) return (parseFloat(Me(e, "marginLeft")) || e.getBoundingClientRect().left - re(e, { marginLeft: 0 }, function() { return e.getBoundingClientRect().left })) + "px" }), x.each({ margin: "", padding: "", border: "Width" }, function(r, o) { x.cssHooks[r + o] = { expand: function(e) { for (var t = 0, n = {}, i = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++) n[r + ne[t] + o] = i[t] || i[t - 2] || i[0]; return n } }, "margin" !== r && (x.cssHooks[r + o].set = Ke) }), x.fn.extend({ css: function(e, t) { return X(this, function(e, t, n) { var i, r, o = {},
                    s = 0; if (Array.isArray(t)) { for (i = Re(e), r = t.length; s < r; s++) o[t[s]] = x.css(e, t[s], !1, i); return o } return void 0 !== n ? x.style(e, t, n) : x.css(e, t) }, e, t, 1 < arguments.length) } }), ((x.Tween = Ge).prototype = { constructor: Ge, init: function(e, t, n, i, r, o) { this.elem = e, this.prop = n, this.easing = r || x.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = i, this.unit = o || (x.cssNumber[n] ? "" : "px") }, cur: function() { var e = Ge.propHooks[this.prop]; return e && e.get ? e.get(this) : Ge.propHooks._default.get(this) }, run: function(e) { var t, n = Ge.propHooks[this.prop]; return this.options.duration ? this.pos = t = x.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : Ge.propHooks._default.set(this), this } }).init.prototype = Ge.prototype, (Ge.propHooks = { _default: { get: function(e) { var t; return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = x.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0 }, set: function(e) { x.fx.step[e.prop] ? x.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[x.cssProps[e.prop]] && !x.cssHooks[e.prop] ? e.elem[e.prop] = e.now : x.style(e.elem, e.prop, e.now + e.unit) } } }).scrollTop = Ge.propHooks.scrollLeft = { set: function(e) { e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now) } }, x.easing = { linear: function(e) { return e }, swing: function(e) { return .5 - Math.cos(e * Math.PI) / 2 }, _default: "swing" }, x.fx = Ge.prototype.init, x.fx.step = {}; var Ze, Je, et, tt, nt = /^(?:toggle|show|hide)$/,
        it = /queueHooks$/;

    function rt() { Je && (!1 === T.hidden && E.requestAnimationFrame ? E.requestAnimationFrame(rt) : E.setTimeout(rt, x.fx.interval), x.fx.tick()) }

    function ot() { return E.setTimeout(function() { Ze = void 0 }), Ze = Date.now() }

    function st(e, t) { var n, i = 0,
            r = { height: e }; for (t = t ? 1 : 0; i < 4; i += 2 - t) r["margin" + (n = ne[i])] = r["padding" + n] = e; return t && (r.opacity = r.width = e), r }

    function at(e, t, n) { for (var i, r = (lt.tweeners[t] || []).concat(lt.tweeners["*"]), o = 0, s = r.length; o < s; o++)
            if (i = r[o].call(n, t, e)) return i }

    function lt(o, e, t) { var n, s, i = 0,
            r = lt.prefilters.length,
            a = x.Deferred().always(function() { delete l.elem }),
            l = function() { if (s) return !1; for (var e = Ze || ot(), t = Math.max(0, c.startTime + c.duration - e), n = 1 - (t / c.duration || 0), i = 0, r = c.tweens.length; i < r; i++) c.tweens[i].run(n); return a.notifyWith(o, [c, n, t]), n < 1 && r ? t : (r || a.notifyWith(o, [c, 1, 0]), a.resolveWith(o, [c]), !1) },
            c = a.promise({ elem: o, props: x.extend({}, e), opts: x.extend(!0, { specialEasing: {}, easing: x.easing._default }, t), originalProperties: e, originalOptions: t, startTime: Ze || ot(), duration: t.duration, tweens: [], createTween: function(e, t) { var n = x.Tween(o, c.opts, e, t, c.opts.specialEasing[e] || c.opts.easing); return c.tweens.push(n), n }, stop: function(e) { var t = 0,
                        n = e ? c.tweens.length : 0; if (s) return this; for (s = !0; t < n; t++) c.tweens[t].run(1); return e ? (a.notifyWith(o, [c, 1, 0]), a.resolveWith(o, [c, e])) : a.rejectWith(o, [c, e]), this } }),
            u = c.props; for (function(e, t) { var n, i, r, o, s; for (n in e)
                    if (r = t[i = U(n)], o = e[n], Array.isArray(o) && (r = o[1], o = e[n] = o[0]), n !== i && (e[i] = o, delete e[n]), (s = x.cssHooks[i]) && "expand" in s)
                        for (n in o = s.expand(o), delete e[i], o) n in e || (e[n] = o[n], t[n] = r);
                    else t[i] = r }(u, c.opts.specialEasing); i < r; i++)
            if (n = lt.prefilters[i].call(c, o, u, c.opts)) return y(n.stop) && (x._queueHooks(c.elem, c.opts.queue).stop = n.stop.bind(n)), n;
        return x.map(u, at, c), y(c.opts.start) && c.opts.start.call(o, c), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always), x.fx.timer(x.extend(l, { elem: o, anim: c, queue: c.opts.queue })), c }
    x.Animation = x.extend(lt, { tweeners: { "*": [function(e, t) { var n = this.createTween(e, t); return oe(n.elem, e, te.exec(t), n), n }] }, tweener: function(e, t) { for (var n, i = 0, r = (e = y(e) ? (t = e, ["*"]) : e.match(P)).length; i < r; i++) n = e[i], lt.tweeners[n] = lt.tweeners[n] || [], lt.tweeners[n].unshift(t) }, prefilters: [function(e, t, n) { var i, r, o, s, a, l, c, u, f = "width" in t || "height" in t,
                d = this,
                h = {},
                p = e.style,
                m = e.nodeType && ie(e),
                g = Q.get(e, "fxshow"); for (i in n.queue || (null == (s = x._queueHooks(e, "fx")).unqueued && (s.unqueued = 0, a = s.empty.fire, s.empty.fire = function() { s.unqueued || a() }), s.unqueued++, d.always(function() { d.always(function() { s.unqueued--, x.queue(e, "fx").length || s.empty.fire() }) })), t)
                if (r = t[i], nt.test(r)) { if (delete t[i], o = o || "toggle" === r, r === (m ? "hide" : "show")) { if ("show" !== r || !g || void 0 === g[i]) continue;
                        m = !0 }
                    h[i] = g && g[i] || x.style(e, i) }
            if ((l = !x.isEmptyObject(t)) || !x.isEmptyObject(h))
                for (i in f && 1 === e.nodeType && (n.overflow = [p.overflow, p.overflowX, p.overflowY], null == (c = g && g.display) && (c = Q.get(e, "display")), "none" === (u = x.css(e, "display")) && (c ? u = c : (ae([e], !0), c = e.style.display || c, u = x.css(e, "display"), ae([e]))), ("inline" === u || "inline-block" === u && null != c) && "none" === x.css(e, "float") && (l || (d.done(function() { p.display = c }), null == c && (u = p.display, c = "none" === u ? "" : u)), p.display = "inline-block")), n.overflow && (p.overflow = "hidden", d.always(function() { p.overflow = n.overflow[0], p.overflowX = n.overflow[1], p.overflowY = n.overflow[2] })), l = !1, h) l || (g ? "hidden" in g && (m = g.hidden) : g = Q.access(e, "fxshow", { display: c }), o && (g.hidden = !m), m && ae([e], !0), d.done(function() { for (i in m || ae([e]), Q.remove(e, "fxshow"), h) x.style(e, i, h[i]) })), l = at(m ? g[i] : 0, i, d), i in g || (g[i] = l.start, m && (l.end = l.start, l.start = 0)) }], prefilter: function(e, t) { t ? lt.prefilters.unshift(e) : lt.prefilters.push(e) } }), x.speed = function(e, t, n) { var i = e && "object" == typeof e ? x.extend({}, e) : { complete: n || !n && t || y(e) && e, duration: e, easing: n && t || t && !y(t) && t }; return x.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in x.fx.speeds ? i.duration = x.fx.speeds[i.duration] : i.duration = x.fx.speeds._default), null != i.queue && !0 !== i.queue || (i.queue = "fx"), i.old = i.complete, i.complete = function() { y(i.old) && i.old.call(this), i.queue && x.dequeue(this, i.queue) }, i }, x.fn.extend({ fadeTo: function(e, t, n, i) { return this.filter(ie).css("opacity", 0).show().end().animate({ opacity: t }, e, n, i) }, animate: function(t, e, n, i) { var r = x.isEmptyObject(t),
                o = x.speed(e, n, i),
                s = function() { var e = lt(this, x.extend({}, t), o);
                    (r || Q.get(this, "finish")) && e.stop(!0) }; return s.finish = s, r || !1 === o.queue ? this.each(s) : this.queue(o.queue, s) }, stop: function(r, e, o) { var s = function(e) { var t = e.stop;
                delete e.stop, t(o) }; return "string" != typeof r && (o = e, e = r, r = void 0), e && !1 !== r && this.queue(r || "fx", []), this.each(function() { var e = !0,
                    t = null != r && r + "queueHooks",
                    n = x.timers,
                    i = Q.get(this); if (t) i[t] && i[t].stop && s(i[t]);
                else
                    for (t in i) i[t] && i[t].stop && it.test(t) && s(i[t]); for (t = n.length; t--;) n[t].elem !== this || null != r && n[t].queue !== r || (n[t].anim.stop(o), e = !1, n.splice(t, 1));!e && o || x.dequeue(this, r) }) }, finish: function(s) { return !1 !== s && (s = s || "fx"), this.each(function() { var e, t = Q.get(this),
                    n = t[s + "queue"],
                    i = t[s + "queueHooks"],
                    r = x.timers,
                    o = n ? n.length : 0; for (t.finish = !0, x.queue(this, s, []), i && i.stop && i.stop.call(this, !0), e = r.length; e--;) r[e].elem === this && r[e].queue === s && (r[e].anim.stop(!0), r.splice(e, 1)); for (e = 0; e < o; e++) n[e] && n[e].finish && n[e].finish.call(this);
                delete t.finish }) } }), x.each(["toggle", "show", "hide"], function(e, i) { var r = x.fn[i];
        x.fn[i] = function(e, t, n) { return null == e || "boolean" == typeof e ? r.apply(this, arguments) : this.animate(st(i, !0), e, t, n) } }), x.each({ slideDown: st("show"), slideUp: st("hide"), slideToggle: st("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function(e, i) { x.fn[e] = function(e, t, n) { return this.animate(i, e, t, n) } }), x.timers = [], x.fx.tick = function() { var e, t = 0,
            n = x.timers; for (Ze = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || x.fx.stop(), Ze = void 0 }, x.fx.timer = function(e) { x.timers.push(e), x.fx.start() }, x.fx.interval = 13, x.fx.start = function() { Je || (Je = !0, rt()) }, x.fx.stop = function() { Je = null }, x.fx.speeds = { slow: 600, fast: 200, _default: 400 }, x.fn.delay = function(i, e) { return i = x.fx && x.fx.speeds[i] || i, e = e || "fx", this.queue(e, function(e, t) { var n = E.setTimeout(e, i);
            t.stop = function() { E.clearTimeout(n) } }) }, et = T.createElement("input"), tt = T.createElement("select").appendChild(T.createElement("option")), et.type = "checkbox", v.checkOn = "" !== et.value, v.optSelected = tt.selected, (et = T.createElement("input")).value = "t", et.type = "radio", v.radioValue = "t" === et.value; var ct, ut = x.expr.attrHandle;
    x.fn.extend({ attr: function(e, t) { return X(this, x.attr, e, t, 1 < arguments.length) }, removeAttr: function(e) { return this.each(function() { x.removeAttr(this, e) }) } }), x.extend({ attr: function(e, t, n) { var i, r, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return void 0 === e.getAttribute ? x.prop(e, t, n) : (1 === o && x.isXMLDoc(e) || (r = x.attrHooks[t.toLowerCase()] || (x.expr.match.bool.test(t) ? ct : void 0)), void 0 !== n ? null === n ? void x.removeAttr(e, t) : r && "set" in r && void 0 !== (i = r.set(e, n, t)) ? i : (e.setAttribute(t, n + ""), n) : r && "get" in r && null !== (i = r.get(e, t)) ? i : null == (i = x.find.attr(e, t)) ? void 0 : i) }, attrHooks: { type: { set: function(e, t) { if (!v.radioValue && "radio" === t && I(e, "input")) { var n = e.value; return e.setAttribute("type", t), n && (e.value = n), t } } } }, removeAttr: function(e, t) { var n, i = 0,
                r = t && t.match(P); if (r && 1 === e.nodeType)
                for (; n = r[i++];) e.removeAttribute(n) } }), ct = { set: function(e, t, n) { return !1 === t ? x.removeAttr(e, n) : e.setAttribute(n, n), n } }, x.each(x.expr.match.bool.source.match(/\w+/g), function(e, t) { var s = ut[t] || x.find.attr;
        ut[t] = function(e, t, n) { var i, r, o = t.toLowerCase(); return n || (r = ut[o], ut[o] = i, i = null != s(e, t, n) ? o : null, ut[o] = r), i } }); var ft = /^(?:input|select|textarea|button)$/i,
        dt = /^(?:a|area)$/i;

    function ht(e) { return (e.match(P) || []).join(" ") }

    function pt(e) { return e.getAttribute && e.getAttribute("class") || "" }

    function mt(e) { return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || [] }
    x.fn.extend({ prop: function(e, t) { return X(this, x.prop, e, t, 1 < arguments.length) }, removeProp: function(e) { return this.each(function() { delete this[x.propFix[e] || e] }) } }), x.extend({ prop: function(e, t, n) { var i, r, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return 1 === o && x.isXMLDoc(e) || (t = x.propFix[t] || t, r = x.propHooks[t]), void 0 !== n ? r && "set" in r && void 0 !== (i = r.set(e, n, t)) ? i : e[t] = n : r && "get" in r && null !== (i = r.get(e, t)) ? i : e[t] }, propHooks: { tabIndex: { get: function(e) { var t = x.find.attr(e, "tabindex"); return t ? parseInt(t, 10) : ft.test(e.nodeName) || dt.test(e.nodeName) && e.href ? 0 : -1 } } }, propFix: { for: "htmlFor", class: "className" } }), v.optSelected || (x.propHooks.selected = { get: function(e) { var t = e.parentNode; return t && t.parentNode && t.parentNode.selectedIndex, null }, set: function(e) { var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex) } }), x.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() { x.propFix[this.toLowerCase()] = this }), x.fn.extend({ addClass: function(t) { var e, n, i, r, o, s, a, l = 0; if (y(t)) return this.each(function(e) { x(this).addClass(t.call(this, e, pt(this))) }); if ((e = mt(t)).length)
                for (; n = this[l++];)
                    if (r = pt(n), i = 1 === n.nodeType && " " + ht(r) + " ") { for (s = 0; o = e[s++];) i.indexOf(" " + o + " ") < 0 && (i += o + " ");
                        r !== (a = ht(i)) && n.setAttribute("class", a) }
            return this }, removeClass: function(t) { var e, n, i, r, o, s, a, l = 0; if (y(t)) return this.each(function(e) { x(this).removeClass(t.call(this, e, pt(this))) }); if (!arguments.length) return this.attr("class", ""); if ((e = mt(t)).length)
                for (; n = this[l++];)
                    if (r = pt(n), i = 1 === n.nodeType && " " + ht(r) + " ") { for (s = 0; o = e[s++];)
                            for (; - 1 < i.indexOf(" " + o + " ");) i = i.replace(" " + o + " ", " ");
                        r !== (a = ht(i)) && n.setAttribute("class", a) }
            return this }, toggleClass: function(r, t) { var o = typeof r,
                s = "string" === o || Array.isArray(r); return "boolean" == typeof t && s ? t ? this.addClass(r) : this.removeClass(r) : y(r) ? this.each(function(e) { x(this).toggleClass(r.call(this, e, pt(this), t), t) }) : this.each(function() { var e, t, n, i; if (s)
                    for (t = 0, n = x(this), i = mt(r); e = i[t++];) n.hasClass(e) ? n.removeClass(e) : n.addClass(e);
                else void 0 !== r && "boolean" !== o || ((e = pt(this)) && Q.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === r ? "" : Q.get(this, "__className__") || "")) }) }, hasClass: function(e) { var t, n, i = 0; for (t = " " + e + " "; n = this[i++];)
                if (1 === n.nodeType && -1 < (" " + ht(pt(n)) + " ").indexOf(t)) return !0;
            return !1 } }); var gt = /\r/g;
    x.fn.extend({ val: function(n) { var i, e, r, t = this[0]; return arguments.length ? (r = y(n), this.each(function(e) { var t;
                1 === this.nodeType && (null == (t = r ? n.call(this, e, x(this).val()) : n) ? t = "" : "number" == typeof t ? t += "" : Array.isArray(t) && (t = x.map(t, function(e) { return null == e ? "" : e + "" })), (i = x.valHooks[this.type] || x.valHooks[this.nodeName.toLowerCase()]) && "set" in i && void 0 !== i.set(this, t, "value") || (this.value = t)) })) : t ? (i = x.valHooks[t.type] || x.valHooks[t.nodeName.toLowerCase()]) && "get" in i && void 0 !== (e = i.get(t, "value")) ? e : "string" == typeof(e = t.value) ? e.replace(gt, "") : null == e ? "" : e : void 0 } }), x.extend({ valHooks: { option: { get: function(e) { var t = x.find.attr(e, "value"); return null != t ? t : ht(x.text(e)) } }, select: { get: function(e) { var t, n, i, r = e.options,
                        o = e.selectedIndex,
                        s = "select-one" === e.type,
                        a = s ? null : [],
                        l = s ? o + 1 : r.length; for (i = o < 0 ? l : s ? o : 0; i < l; i++)
                        if (((n = r[i]).selected || i === o) && !n.disabled && (!n.parentNode.disabled || !I(n.parentNode, "optgroup"))) { if (t = x(n).val(), s) return t;
                            a.push(t) }
                    return a }, set: function(e, t) { for (var n, i, r = e.options, o = x.makeArray(t), s = r.length; s--;)((i = r[s]).selected = -1 < x.inArray(x.valHooks.option.get(i), o)) && (n = !0); return n || (e.selectedIndex = -1), o } } } }), x.each(["radio", "checkbox"], function() { x.valHooks[this] = { set: function(e, t) { if (Array.isArray(t)) return e.checked = -1 < x.inArray(x(e).val(), t) } }, v.checkOn || (x.valHooks[this].get = function(e) { return null === e.getAttribute("value") ? "on" : e.value }) }), v.focusin = "onfocusin" in E; var vt = /^(?:focusinfocus|focusoutblur)$/,
        yt = function(e) { e.stopPropagation() };
    x.extend(x.event, { trigger: function(e, t, n, i) { var r, o, s, a, l, c, u, f, d = [n || T],
                h = g.call(e, "type") ? e.type : e,
                p = g.call(e, "namespace") ? e.namespace.split(".") : []; if (o = f = s = n = n || T, 3 !== n.nodeType && 8 !== n.nodeType && !vt.test(h + x.event.triggered) && (-1 < h.indexOf(".") && (h = (p = h.split(".")).shift(), p.sort()), l = h.indexOf(":") < 0 && "on" + h, (e = e[x.expando] ? e : new x.Event(h, "object" == typeof e && e)).isTrigger = i ? 2 : 3, e.namespace = p.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : x.makeArray(t, [e]), u = x.event.special[h] || {}, i || !u.trigger || !1 !== u.trigger.apply(n, t))) { if (!i && !u.noBubble && !b(n)) { for (a = u.delegateType || h, vt.test(a + h) || (o = o.parentNode); o; o = o.parentNode) d.push(o), s = o;
                    s === (n.ownerDocument || T) && d.push(s.defaultView || s.parentWindow || E) } for (r = 0;
                    (o = d[r++]) && !e.isPropagationStopped();) f = o, e.type = 1 < r ? a : u.bindType || h, (c = (Q.get(o, "events") || {})[e.type] && Q.get(o, "handle")) && c.apply(o, t), (c = l && o[l]) && c.apply && z(o) && (e.result = c.apply(o, t), !1 === e.result && e.preventDefault()); return e.type = h, i || e.isDefaultPrevented() || u._default && !1 !== u._default.apply(d.pop(), t) || !z(n) || l && y(n[h]) && !b(n) && ((s = n[l]) && (n[l] = null), x.event.triggered = h, e.isPropagationStopped() && f.addEventListener(h, yt), n[h](), e.isPropagationStopped() && f.removeEventListener(h, yt), x.event.triggered = void 0, s && (n[l] = s)), e.result } }, simulate: function(e, t, n) { var i = x.extend(new x.Event, n, { type: e, isSimulated: !0 });
            x.event.trigger(i, null, t) } }), x.fn.extend({ trigger: function(e, t) { return this.each(function() { x.event.trigger(e, t, this) }) }, triggerHandler: function(e, t) { var n = this[0]; if (n) return x.event.trigger(e, t, n, !0) } }), v.focusin || x.each({ focus: "focusin", blur: "focusout" }, function(n, i) { var r = function(e) { x.event.simulate(i, e.target, x.event.fix(e)) };
        x.event.special[i] = { setup: function() { var e = this.ownerDocument || this,
                    t = Q.access(e, i);
                t || e.addEventListener(n, r, !0), Q.access(e, i, (t || 0) + 1) }, teardown: function() { var e = this.ownerDocument || this,
                    t = Q.access(e, i) - 1;
                t ? Q.access(e, i, t) : (e.removeEventListener(n, r, !0), Q.remove(e, i)) } } }); var bt = E.location,
        _t = Date.now(),
        wt = /\?/;
    x.parseXML = function(e) { var t; if (!e || "string" != typeof e) return null; try { t = (new E.DOMParser).parseFromString(e, "text/xml") } catch (e) { t = void 0 } return t && !t.getElementsByTagName("parsererror").length || x.error("Invalid XML: " + e), t }; var Ct = /\[\]$/,
        Et = /\r?\n/g,
        Tt = /^(?:submit|button|image|reset|file)$/i,
        xt = /^(?:input|select|textarea|keygen)/i;

    function St(n, e, i, r) { var t; if (Array.isArray(e)) x.each(e, function(e, t) { i || Ct.test(n) ? r(n, t) : St(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, i, r) });
        else if (i || "object" !== w(e)) r(n, e);
        else
            for (t in e) St(n + "[" + t + "]", e[t], i, r) }
    x.param = function(e, t) { var n, i = [],
            r = function(e, t) { var n = y(t) ? t() : t;
                i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n) }; if (Array.isArray(e) || e.jquery && !x.isPlainObject(e)) x.each(e, function() { r(this.name, this.value) });
        else
            for (n in e) St(n, e[n], t, r); return i.join("&") }, x.fn.extend({ serialize: function() { return x.param(this.serializeArray()) }, serializeArray: function() { return this.map(function() { var e = x.prop(this, "elements"); return e ? x.makeArray(e) : this }).filter(function() { var e = this.type; return this.name && !x(this).is(":disabled") && xt.test(this.nodeName) && !Tt.test(e) && (this.checked || !le.test(e)) }).map(function(e, t) { var n = x(this).val(); return null == n ? null : Array.isArray(n) ? x.map(n, function(e) { return { name: t.name, value: e.replace(Et, "\r\n") } }) : { name: t.name, value: n.replace(Et, "\r\n") } }).get() } }); var It = /%20/g,
        At = /#.*$/,
        Dt = /([?&])_=[^&]*/,
        kt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Nt = /^(?:GET|HEAD)$/,
        Ot = /^\/\//,
        Lt = {},
        jt = {},
        Pt = "*/".concat("*"),
        Ht = T.createElement("a");

    function Rt(o) { return function(e, t) { "string" != typeof e && (t = e, e = "*"); var n, i = 0,
                r = e.toLowerCase().match(P) || []; if (y(t))
                for (; n = r[i++];) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(t)) : (o[n] = o[n] || []).push(t) } }

    function Wt(t, r, o, s) { var a = {},
            l = t === jt;

        function c(e) { var i; return a[e] = !0, x.each(t[e] || [], function(e, t) { var n = t(r, o, s); return "string" != typeof n || l || a[n] ? l ? !(i = n) : void 0 : (r.dataTypes.unshift(n), c(n), !1) }), i } return c(r.dataTypes[0]) || !a["*"] && c("*") }

    function Mt(e, t) { var n, i, r = x.ajaxSettings.flatOptions || {}; for (n in t) void 0 !== t[n] && ((r[n] ? e : i || (i = {}))[n] = t[n]); return i && x.extend(!0, e, i), e }
    Ht.href = bt.href, x.extend({ active: 0, lastModified: {}, etag: {}, ajaxSettings: { url: bt.href, type: "GET", isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": Pt, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": x.parseXML }, flatOptions: { url: !0, context: !0 } }, ajaxSetup: function(e, t) { return t ? Mt(Mt(e, x.ajaxSettings), t) : Mt(x.ajaxSettings, e) }, ajaxPrefilter: Rt(Lt), ajaxTransport: Rt(jt), ajax: function(e, t) { "object" == typeof e && (t = e, e = void 0), t = t || {}; var u, f, d, n, h, i, p, m, r, o, g = x.ajaxSetup({}, t),
                v = g.context || g,
                y = g.context && (v.nodeType || v.jquery) ? x(v) : x.event,
                b = x.Deferred(),
                _ = x.Callbacks("once memory"),
                w = g.statusCode || {},
                s = {},
                a = {},
                l = "canceled",
                C = { readyState: 0, getResponseHeader: function(e) { var t; if (p) { if (!n)
                                for (n = {}; t = kt.exec(d);) n[t[1].toLowerCase()] = t[2];
                            t = n[e.toLowerCase()] } return null == t ? null : t }, getAllResponseHeaders: function() { return p ? d : null }, setRequestHeader: function(e, t) { return null == p && (e = a[e.toLowerCase()] = a[e.toLowerCase()] || e, s[e] = t), this }, overrideMimeType: function(e) { return null == p && (g.mimeType = e), this }, statusCode: function(e) { var t; if (e)
                            if (p) C.always(e[C.status]);
                            else
                                for (t in e) w[t] = [w[t], e[t]];
                        return this }, abort: function(e) { var t = e || l; return u && u.abort(t), c(0, t), this } }; if (b.promise(C), g.url = ((e || g.url || bt.href) + "").replace(Ot, bt.protocol + "//"), g.type = t.method || t.type || g.method || g.type, g.dataTypes = (g.dataType || "*").toLowerCase().match(P) || [""], null == g.crossDomain) { i = T.createElement("a"); try { i.href = g.url, i.href = i.href, g.crossDomain = Ht.protocol + "//" + Ht.host != i.protocol + "//" + i.host } catch (e) { g.crossDomain = !0 } } if (g.data && g.processData && "string" != typeof g.data && (g.data = x.param(g.data, g.traditional)), Wt(Lt, g, t, C), p) return C; for (r in (m = x.event && g.global) && 0 == x.active++ && x.event.trigger("ajaxStart"), g.type = g.type.toUpperCase(), g.hasContent = !Nt.test(g.type), f = g.url.replace(At, ""), g.hasContent ? g.data && g.processData && 0 === (g.contentType || "").indexOf("application/x-www-form-urlencoded") && (g.data = g.data.replace(It, "+")) : (o = g.url.slice(f.length), g.data && (g.processData || "string" == typeof g.data) && (f += (wt.test(f) ? "&" : "?") + g.data, delete g.data), !1 === g.cache && (f = f.replace(Dt, "$1"), o = (wt.test(f) ? "&" : "?") + "_=" + _t++ + o), g.url = f + o), g.ifModified && (x.lastModified[f] && C.setRequestHeader("If-Modified-Since", x.lastModified[f]), x.etag[f] && C.setRequestHeader("If-None-Match", x.etag[f])), (g.data && g.hasContent && !1 !== g.contentType || t.contentType) && C.setRequestHeader("Content-Type", g.contentType), C.setRequestHeader("Accept", g.dataTypes[0] && g.accepts[g.dataTypes[0]] ? g.accepts[g.dataTypes[0]] + ("*" !== g.dataTypes[0] ? ", " + Pt + "; q=0.01" : "") : g.accepts["*"]), g.headers) C.setRequestHeader(r, g.headers[r]); if (g.beforeSend && (!1 === g.beforeSend.call(v, C, g) || p)) return C.abort(); if (l = "abort", _.add(g.complete), C.done(g.success), C.fail(g.error), u = Wt(jt, g, t, C)) { if (C.readyState = 1, m && y.trigger("ajaxSend", [C, g]), p) return C;
                g.async && 0 < g.timeout && (h = E.setTimeout(function() { C.abort("timeout") }, g.timeout)); try { p = !1, u.send(s, c) } catch (e) { if (p) throw e;
                    c(-1, e) } } else c(-1, "No Transport");

            function c(e, t, n, i) { var r, o, s, a, l, c = t;
                p || (p = !0, h && E.clearTimeout(h), u = void 0, d = i || "", C.readyState = 0 < e ? 4 : 0, r = 200 <= e && e < 300 || 304 === e, n && (a = function(e, t, n) { for (var i, r, o, s, a = e.contents, l = e.dataTypes;
                        "*" === l[0];) l.shift(), void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type")); if (i)
                        for (r in a)
                            if (a[r] && a[r].test(i)) { l.unshift(r); break }
                    if (l[0] in n) o = l[0];
                    else { for (r in n) { if (!l[0] || e.converters[r + " " + l[0]]) { o = r; break }
                            s || (s = r) }
                        o = o || s } if (o) return o !== l[0] && l.unshift(o), n[o] }(g, C, n)), a = function(e, t, n, i) { var r, o, s, a, l, c = {},
                        u = e.dataTypes.slice(); if (u[1])
                        for (s in e.converters) c[s.toLowerCase()] = e.converters[s]; for (o = u.shift(); o;)
                        if (e.responseFields[o] && (n[e.responseFields[o]] = t), !l && i && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = o, o = u.shift())
                            if ("*" === o) o = l;
                            else if ("*" !== l && l !== o) { if (!(s = c[l + " " + o] || c["* " + o]))
                            for (r in c)
                                if ((a = r.split(" "))[1] === o && (s = c[l + " " + a[0]] || c["* " + a[0]])) {!0 === s ? s = c[r] : !0 !== c[r] && (o = a[0], u.unshift(a[1])); break }
                        if (!0 !== s)
                            if (s && e.throws) t = s(t);
                            else try { t = s(t) } catch (e) { return { state: "parsererror", error: s ? e : "No conversion from " + l + " to " + o } } } return { state: "success", data: t } }(g, a, C, r), r ? (g.ifModified && ((l = C.getResponseHeader("Last-Modified")) && (x.lastModified[f] = l), (l = C.getResponseHeader("etag")) && (x.etag[f] = l)), 204 === e || "HEAD" === g.type ? c = "nocontent" : 304 === e ? c = "notmodified" : (c = a.state, o = a.data, r = !(s = a.error))) : (s = c, !e && c || (c = "error", e < 0 && (e = 0))), C.status = e, C.statusText = (t || c) + "", r ? b.resolveWith(v, [o, c, C]) : b.rejectWith(v, [C, c, s]), C.statusCode(w), w = void 0, m && y.trigger(r ? "ajaxSuccess" : "ajaxError", [C, g, r ? o : s]), _.fireWith(v, [C, c]), m && (y.trigger("ajaxComplete", [C, g]), --x.active || x.event.trigger("ajaxStop"))) } return C }, getJSON: function(e, t, n) { return x.get(e, t, n, "json") }, getScript: function(e, t) { return x.get(e, void 0, t, "script") } }), x.each(["get", "post"], function(e, r) { x[r] = function(e, t, n, i) { return y(t) && (i = i || n, n = t, t = void 0), x.ajax(x.extend({ url: e, type: r, dataType: i, data: t, success: n }, x.isPlainObject(e) && e)) } }), x._evalUrl = function(e) { return x.ajax({ url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, throws: !0 }) }, x.fn.extend({ wrapAll: function(e) { var t; return this[0] && (y(e) && (e = e.call(this[0])), t = x(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() { for (var e = this; e.firstElementChild;) e = e.firstElementChild; return e }).append(this)), this }, wrapInner: function(n) { return y(n) ? this.each(function(e) { x(this).wrapInner(n.call(this, e)) }) : this.each(function() { var e = x(this),
                    t = e.contents();
                t.length ? t.wrapAll(n) : e.append(n) }) }, wrap: function(t) { var n = y(t); return this.each(function(e) { x(this).wrapAll(n ? t.call(this, e) : t) }) }, unwrap: function(e) { return this.parent(e).not("body").each(function() { x(this).replaceWith(this.childNodes) }), this } }), x.expr.pseudos.hidden = function(e) { return !x.expr.pseudos.visible(e) }, x.expr.pseudos.visible = function(e) { return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length) }, x.ajaxSettings.xhr = function() { try { return new E.XMLHttpRequest } catch (e) {} }; var qt = { 0: 200, 1223: 204 },
        Yt = x.ajaxSettings.xhr();
    v.cors = !!Yt && "withCredentials" in Yt, v.ajax = Yt = !!Yt, x.ajaxTransport(function(r) { var o, s; if (v.cors || Yt && !r.crossDomain) return { send: function(e, t) { var n, i = r.xhr(); if (i.open(r.type, r.url, r.async, r.username, r.password), r.xhrFields)
                    for (n in r.xhrFields) i[n] = r.xhrFields[n]; for (n in r.mimeType && i.overrideMimeType && i.overrideMimeType(r.mimeType), r.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"), e) i.setRequestHeader(n, e[n]);
                o = function(e) { return function() { o && (o = s = i.onload = i.onerror = i.onabort = i.ontimeout = i.onreadystatechange = null, "abort" === e ? i.abort() : "error" === e ? "number" != typeof i.status ? t(0, "error") : t(i.status, i.statusText) : t(qt[i.status] || i.status, i.statusText, "text" !== (i.responseType || "text") || "string" != typeof i.responseText ? { binary: i.response } : { text: i.responseText }, i.getAllResponseHeaders())) } }, i.onload = o(), s = i.onerror = i.ontimeout = o("error"), void 0 !== i.onabort ? i.onabort = s : i.onreadystatechange = function() { 4 === i.readyState && E.setTimeout(function() { o && s() }) }, o = o("abort"); try { i.send(r.hasContent && r.data || null) } catch (e) { if (o) throw e } }, abort: function() { o && o() } } }), x.ajaxPrefilter(function(e) { e.crossDomain && (e.contents.script = !1) }), x.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function(e) { return x.globalEval(e), e } } }), x.ajaxPrefilter("script", function(e) { void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET") }), x.ajaxTransport("script", function(n) { var i, r; if (n.crossDomain) return { send: function(e, t) { i = x("<script>").prop({ charset: n.scriptCharset, src: n.url }).on("load error", r = function(e) { i.remove(), r = null, e && t("error" === e.type ? 404 : 200, e.type) }), T.head.appendChild(i[0]) }, abort: function() { r && r() } } }); var Xt, Bt = [],
        $t = /(=)\?(?=&|$)|\?\?/;
    x.ajaxSetup({ jsonp: "callback", jsonpCallback: function() { var e = Bt.pop() || x.expando + "_" + _t++; return this[e] = !0, e } }), x.ajaxPrefilter("json jsonp", function(e, t, n) { var i, r, o, s = !1 !== e.jsonp && ($t.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && $t.test(e.data) && "data"); if (s || "jsonp" === e.dataTypes[0]) return i = e.jsonpCallback = y(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, s ? e[s] = e[s].replace($t, "$1" + i) : !1 !== e.jsonp && (e.url += (wt.test(e.url) ? "&" : "?") + e.jsonp + "=" + i), e.converters["script json"] = function() { return o || x.error(i + " was not called"), o[0] }, e.dataTypes[0] = "json", r = E[i], E[i] = function() { o = arguments }, n.always(function() { void 0 === r ? x(E).removeProp(i) : E[i] = r, e[i] && (e.jsonpCallback = t.jsonpCallback, Bt.push(i)), o && y(r) && r(o[0]), o = r = void 0 }), "script" }), v.createHTMLDocument = ((Xt = T.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Xt.childNodes.length), x.parseHTML = function(e, t, n) { return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (v.createHTMLDocument ? ((i = (t = T.implementation.createHTMLDocument("")).createElement("base")).href = T.location.href, t.head.appendChild(i)) : t = T), o = !n && [], (r = A.exec(e)) ? [t.createElement(r[1])] : (r = ve([e], t, o), o && o.length && x(o).remove(), x.merge([], r.childNodes))); var i, r, o }, x.fn.load = function(e, t, n) { var i, r, o, s = this,
            a = e.indexOf(" "); return -1 < a && (i = ht(e.slice(a)), e = e.slice(0, a)), y(t) ? (n = t, t = void 0) : t && "object" == typeof t && (r = "POST"), 0 < s.length && x.ajax({ url: e, type: r || "GET", dataType: "html", data: t }).done(function(e) { o = arguments, s.html(i ? x("<div>").append(x.parseHTML(e)).find(i) : e) }).always(n && function(e, t) { s.each(function() { n.apply(this, o || [e.responseText, t, e]) }) }), this }, x.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) { x.fn[t] = function(e) { return this.on(t, e) } }), x.expr.pseudos.animated = function(t) { return x.grep(x.timers, function(e) { return t === e.elem }).length }, x.offset = { setOffset: function(e, t, n) { var i, r, o, s, a, l, c = x.css(e, "position"),
                u = x(e),
                f = {}; "static" === c && (e.style.position = "relative"), a = u.offset(), o = x.css(e, "top"), l = x.css(e, "left"), r = ("absolute" === c || "fixed" === c) && -1 < (o + l).indexOf("auto") ? (s = (i = u.position()).top, i.left) : (s = parseFloat(o) || 0, parseFloat(l) || 0), y(t) && (t = t.call(e, n, x.extend({}, a))), null != t.top && (f.top = t.top - a.top + s), null != t.left && (f.left = t.left - a.left + r), "using" in t ? t.using.call(e, f) : u.css(f) } }, x.fn.extend({ offset: function(t) { if (arguments.length) return void 0 === t ? this : this.each(function(e) { x.offset.setOffset(this, t, e) }); var e, n, i = this[0]; return i ? i.getClientRects().length ? (e = i.getBoundingClientRect(), n = i.ownerDocument.defaultView, { top: e.top + n.pageYOffset, left: e.left + n.pageXOffset }) : { top: 0, left: 0 } : void 0 }, position: function() { if (this[0]) { var e, t, n, i = this[0],
                    r = { top: 0, left: 0 }; if ("fixed" === x.css(i, "position")) t = i.getBoundingClientRect();
                else { for (t = this.offset(), n = i.ownerDocument, e = i.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === x.css(e, "position");) e = e.parentNode;
                    e && e !== i && 1 === e.nodeType && ((r = x(e).offset()).top += x.css(e, "borderTopWidth", !0), r.left += x.css(e, "borderLeftWidth", !0)) } return { top: t.top - r.top - x.css(i, "marginTop", !0), left: t.left - r.left - x.css(i, "marginLeft", !0) } } }, offsetParent: function() { return this.map(function() { for (var e = this.offsetParent; e && "static" === x.css(e, "position");) e = e.offsetParent; return e || ye }) } }), x.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function(t, r) { var o = "pageYOffset" === r;
        x.fn[t] = function(e) { return X(this, function(e, t, n) { var i; if (b(e) ? i = e : 9 === e.nodeType && (i = e.defaultView), void 0 === n) return i ? i[r] : e[t];
                i ? i.scrollTo(o ? i.pageXOffset : n, o ? n : i.pageYOffset) : e[t] = n }, t, e, arguments.length) } }), x.each(["top", "left"], function(e, n) { x.cssHooks[n] = qe(v.pixelPosition, function(e, t) { if (t) return t = Me(e, n), He.test(t) ? x(e).position()[n] + "px" : t }) }), x.each({ Height: "height", Width: "width" }, function(s, a) { x.each({ padding: "inner" + s, content: a, "": "outer" + s }, function(i, o) { x.fn[o] = function(e, t) { var n = arguments.length && (i || "boolean" != typeof e),
                    r = i || (!0 === e || !0 === t ? "margin" : "border"); return X(this, function(e, t, n) { var i; return b(e) ? 0 === o.indexOf("outer") ? e["inner" + s] : e.document.documentElement["client" + s] : 9 === e.nodeType ? (i = e.documentElement, Math.max(e.body["scroll" + s], i["scroll" + s], e.body["offset" + s], i["offset" + s], i["client" + s])) : void 0 === n ? x.css(e, t, r) : x.style(e, t, n, r) }, a, n ? e : void 0, n) } }) }), x.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, n) { x.fn[n] = function(e, t) { return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n) } }), x.fn.extend({ hover: function(e, t) { return this.mouseenter(e).mouseleave(t || e) } }), x.fn.extend({ bind: function(e, t, n) { return this.on(e, null, t, n) }, unbind: function(e, t) { return this.off(e, null, t) }, delegate: function(e, t, n, i) { return this.on(t, e, n, i) }, undelegate: function(e, t, n) { return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n) } }), x.proxy = function(e, t) { var n, i, r; if ("string" == typeof t && (n = e[t], t = e, e = n), y(e)) return i = a.call(arguments, 2), (r = function() { return e.apply(t || this, i.concat(a.call(arguments))) }).guid = e.guid = e.guid || x.guid++, r }, x.holdReady = function(e) { e ? x.readyWait++ : x.ready(!0) }, x.isArray = Array.isArray, x.parseJSON = JSON.parse, x.nodeName = I, x.isFunction = y, x.isWindow = b, x.camelCase = U, x.type = w, x.now = Date.now, x.isNumeric = function(e) { var t = x.type(e); return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e)) }, "function" == typeof define && define.amd && define("jquery", [], function() { return x }); var Ft = E.jQuery,
        Ut = E.$; return x.noConflict = function(e) { return E.$ === x && (E.$ = Ut), e && E.jQuery === x && (E.jQuery = Ft), x }, e || (E.jQuery = E.$ = x), x }), e = this, t = function(e, p, f) { "use strict";

        function i(e, t) { for (var n = 0; n < t.length; n++) { var i = t[n];
                i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i) } }

        function s(e, t, n) { return t && i(e.prototype, t), n && i(e, n), e }

        function l(r) { for (var e = 1; e < arguments.length; e++) { var o = null != arguments[e] ? arguments[e] : {},
                    t = Object.keys(o); "function" == typeof Object.getOwnPropertySymbols && (t = t.concat(Object.getOwnPropertySymbols(o).filter(function(e) { return Object.getOwnPropertyDescriptor(o, e).enumerable }))), t.forEach(function(e) { var t, n, i;
                    t = r, i = o[n = e], n in t ? Object.defineProperty(t, n, { value: i, enumerable: !0, configurable: !0, writable: !0 }) : t[n] = i }) } return r }
        p = p && p.hasOwnProperty("default") ? p.default : p, f = f && f.hasOwnProperty("default") ? f.default : f; var t = "transitionend"; var m = { TRANSITION_END: "bsTransitionEnd", getUID: function(e) { for (; e += ~~(1e6 * Math.random()), document.getElementById(e);); return e }, getSelectorFromElement: function(e) { var t = e.getAttribute("data-target"); if (!t || "#" === t) { var n = e.getAttribute("href");
                    t = n && "#" !== n ? n.trim() : "" } try { return document.querySelector(t) ? t : null } catch (e) { return null } }, getTransitionDurationFromElement: function(e) { if (!e) return 0; var t = p(e).css("transition-duration"),
                    n = p(e).css("transition-delay"),
                    i = parseFloat(t),
                    r = parseFloat(n); return i || r ? (t = t.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(t) + parseFloat(n))) : 0 }, reflow: function(e) { return e.offsetHeight }, triggerTransitionEnd: function(e) { p(e).trigger(t) }, supportsTransitionEnd: function() { return Boolean(t) }, isElement: function(e) { return (e[0] || e).nodeType }, typeCheckConfig: function(e, t, n) { for (var i in n)
                    if (Object.prototype.hasOwnProperty.call(n, i)) { var r = n[i],
                            o = t[i],
                            s = o && m.isElement(o) ? "element" : (a = o, {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase()); if (!new RegExp(r).test(s)) throw new Error(e.toUpperCase() + ': Option "' + i + '" provided type "' + s + '" but expected type "' + r + '".') }
                var a }, findShadowRoot: function(e) { if (!document.documentElement.attachShadow) return null; if ("function" != typeof e.getRootNode) return e instanceof ShadowRoot ? e : e.parentNode ? m.findShadowRoot(e.parentNode) : null; var t = e.getRootNode(); return t instanceof ShadowRoot ? t : null } };
        p.fn.emulateTransitionEnd = function(e) { var t = this,
                n = !1; return p(this).one(m.TRANSITION_END, function() { n = !0 }), setTimeout(function() { n || m.triggerTransitionEnd(t) }, e), this }, p.event.special[m.TRANSITION_END] = { bindType: t, delegateType: t, handle: function(e) { if (p(e.target).is(this)) return e.handleObj.handler.apply(this, arguments) } }; var n = "alert",
            r = "bs.alert",
            o = "." + r,
            a = p.fn[n],
            c = { CLOSE: "close" + o, CLOSED: "closed" + o, CLICK_DATA_API: "click" + o + ".data-api" },
            u = function() {
                function i(e) { this._element = e } var e = i.prototype; return e.close = function(e) { var t = this._element;
                    e && (t = this._getRootElement(e)), this._triggerCloseEvent(t).isDefaultPrevented() || this._removeElement(t) }, e.dispose = function() { p.removeData(this._element, r), this._element = null }, e._getRootElement = function(e) { var t = m.getSelectorFromElement(e),
                        n = !1; return t && (n = document.querySelector(t)), n || (n = p(e).closest(".alert")[0]), n }, e._triggerCloseEvent = function(e) { var t = p.Event(c.CLOSE); return p(e).trigger(t), t }, e._removeElement = function(t) { var n = this; if (p(t).removeClass("show"), p(t).hasClass("fade")) { var e = m.getTransitionDurationFromElement(t);
                        p(t).one(m.TRANSITION_END, function(e) { return n._destroyElement(t, e) }).emulateTransitionEnd(e) } else this._destroyElement(t) }, e._destroyElement = function(e) { p(e).detach().trigger(c.CLOSED).remove() }, i._jQueryInterface = function(n) { return this.each(function() { var e = p(this),
                            t = e.data(r);
                        t || (t = new i(this), e.data(r, t)), "close" === n && t[n](this) }) }, i._handleDismiss = function(t) { return function(e) { e && e.preventDefault(), t.close(this) } }, s(i, null, [{ key: "VERSION", get: function() { return "4.3.1" } }]), i }();
        p(document).on(c.CLICK_DATA_API, '[data-dismiss="alert"]', u._handleDismiss(new u)), p.fn[n] = u._jQueryInterface, p.fn[n].Constructor = u, p.fn[n].noConflict = function() { return p.fn[n] = a, u._jQueryInterface }; var d = "button",
            h = "bs.button",
            g = "." + h,
            v = ".data-api",
            y = p.fn[d],
            b = "active",
            _ = '[data-toggle^="button"]',
            w = { CLICK_DATA_API: "click" + g + v, FOCUS_BLUR_DATA_API: "focus" + g + v + " blur" + g + v },
            C = function() {
                function n(e) { this._element = e } var e = n.prototype; return e.toggle = function() { var e = !0,
                        t = !0,
                        n = p(this._element).closest('[data-toggle="buttons"]')[0]; if (n) { var i = this._element.querySelector('input:not([type="hidden"])'); if (i) { if ("radio" === i.type)
                                if (i.checked && this._element.classList.contains(b)) e = !1;
                                else { var r = n.querySelector(".active");
                                    r && p(r).removeClass(b) }
                            if (e) { if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
                                i.checked = !this._element.classList.contains(b), p(i).trigger("change") }
                            i.focus(), t = !1 } }
                    t && this._element.setAttribute("aria-pressed", !this._element.classList.contains(b)), e && p(this._element).toggleClass(b) }, e.dispose = function() { p.removeData(this._element, h), this._element = null }, n._jQueryInterface = function(t) { return this.each(function() { var e = p(this).data(h);
                        e || (e = new n(this), p(this).data(h, e)), "toggle" === t && e[t]() }) }, s(n, null, [{ key: "VERSION", get: function() { return "4.3.1" } }]), n }();
        p(document).on(w.CLICK_DATA_API, _, function(e) { e.preventDefault(); var t = e.target;
            p(t).hasClass("btn") || (t = p(t).closest(".btn")), C._jQueryInterface.call(p(t), "toggle") }).on(w.FOCUS_BLUR_DATA_API, _, function(e) { var t = p(e.target).closest(".btn")[0];
            p(t).toggleClass("focus", /^focus(in)?$/.test(e.type)) }), p.fn[d] = C._jQueryInterface, p.fn[d].Constructor = C, p.fn[d].noConflict = function() { return p.fn[d] = y, C._jQueryInterface }; var E = "carousel",
            T = "bs.carousel",
            x = "." + T,
            S = ".data-api",
            I = p.fn[E],
            A = { interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0, touch: !0 },
            D = { interval: "(number|boolean)", keyboard: "boolean", slide: "(boolean|string)", pause: "(string|boolean)", wrap: "boolean", touch: "boolean" },
            k = "next",
            N = "prev",
            O = { SLIDE: "slide" + x, SLID: "slid" + x, KEYDOWN: "keydown" + x, MOUSEENTER: "mouseenter" + x, MOUSELEAVE: "mouseleave" + x, TOUCHSTART: "touchstart" + x, TOUCHMOVE: "touchmove" + x, TOUCHEND: "touchend" + x, POINTERDOWN: "pointerdown" + x, POINTERUP: "pointerup" + x, DRAG_START: "dragstart" + x, LOAD_DATA_API: "load" + x + S, CLICK_DATA_API: "click" + x + S },
            L = "active",
            j = ".active.carousel-item",
            P = { TOUCH: "touch", PEN: "pen" },
            H = function() {
                function o(e, t) { this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(t), this._element = e, this._indicatorsElement = this._element.querySelector(".carousel-indicators"), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners() } var e = o.prototype; return e.next = function() { this._isSliding || this._slide(k) }, e.nextWhenVisible = function() {!document.hidden && p(this._element).is(":visible") && "hidden" !== p(this._element).css("visibility") && this.next() }, e.prev = function() { this._isSliding || this._slide(N) }, e.pause = function(e) { e || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (m.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null }, e.cycle = function(e) { e || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval)) }, e.to = function(e) { var t = this;
                    this._activeElement = this._element.querySelector(j); var n = this._getItemIndex(this._activeElement); if (!(e > this._items.length - 1 || e < 0))
                        if (this._isSliding) p(this._element).one(O.SLID, function() { return t.to(e) });
                        else { if (n === e) return this.pause(), void this.cycle(); var i = n < e ? k : N;
                            this._slide(i, this._items[e]) } }, e.dispose = function() { p(this._element).off(x), p.removeData(this._element, T), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null }, e._getConfig = function(e) { return e = l({}, A, e), m.typeCheckConfig(E, e, D), e }, e._handleSwipe = function() { var e = Math.abs(this.touchDeltaX); if (!(e <= 40)) { var t = e / this.touchDeltaX;
                        0 < t && this.prev(), t < 0 && this.next() } }, e._addEventListeners = function() { var t = this;
                    this._config.keyboard && p(this._element).on(O.KEYDOWN, function(e) { return t._keydown(e) }), "hover" === this._config.pause && p(this._element).on(O.MOUSEENTER, function(e) { return t.pause(e) }).on(O.MOUSELEAVE, function(e) { return t.cycle(e) }), this._config.touch && this._addTouchEventListeners() }, e._addTouchEventListeners = function() { var n = this; if (this._touchSupported) { var t = function(e) { n._pointerEvent && P[e.originalEvent.pointerType.toUpperCase()] ? n.touchStartX = e.originalEvent.clientX : n._pointerEvent || (n.touchStartX = e.originalEvent.touches[0].clientX) },
                            i = function(e) { n._pointerEvent && P[e.originalEvent.pointerType.toUpperCase()] && (n.touchDeltaX = e.originalEvent.clientX - n.touchStartX), n._handleSwipe(), "hover" === n._config.pause && (n.pause(), n.touchTimeout && clearTimeout(n.touchTimeout), n.touchTimeout = setTimeout(function(e) { return n.cycle(e) }, 500 + n._config.interval)) };
                        p(this._element.querySelectorAll(".carousel-item img")).on(O.DRAG_START, function(e) { return e.preventDefault() }), this._pointerEvent ? (p(this._element).on(O.POINTERDOWN, function(e) { return t(e) }), p(this._element).on(O.POINTERUP, function(e) { return i(e) }), this._element.classList.add("pointer-event")) : (p(this._element).on(O.TOUCHSTART, function(e) { return t(e) }), p(this._element).on(O.TOUCHMOVE, function(e) { var t;
                            (t = e).originalEvent.touches && 1 < t.originalEvent.touches.length ? n.touchDeltaX = 0 : n.touchDeltaX = t.originalEvent.touches[0].clientX - n.touchStartX }), p(this._element).on(O.TOUCHEND, function(e) { return i(e) })) } }, e._keydown = function(e) { if (!/input|textarea/i.test(e.target.tagName)) switch (e.which) {
                        case 37:
                            e.preventDefault(), this.prev(); break;
                        case 39:
                            e.preventDefault(), this.next() } }, e._getItemIndex = function(e) { return this._items = e && e.parentNode ? [].slice.call(e.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(e) }, e._getItemByDirection = function(e, t) { var n = e === k,
                        i = e === N,
                        r = this._getItemIndex(t),
                        o = this._items.length - 1; if ((i && 0 === r || n && r === o) && !this._config.wrap) return t; var s = (r + (e === N ? -1 : 1)) % this._items.length; return -1 === s ? this._items[this._items.length - 1] : this._items[s] }, e._triggerSlideEvent = function(e, t) { var n = this._getItemIndex(e),
                        i = this._getItemIndex(this._element.querySelector(j)),
                        r = p.Event(O.SLIDE, { relatedTarget: e, direction: t, from: i, to: n }); return p(this._element).trigger(r), r }, e._setActiveIndicatorElement = function(e) { if (this._indicatorsElement) { var t = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                        p(t).removeClass(L); var n = this._indicatorsElement.children[this._getItemIndex(e)];
                        n && p(n).addClass(L) } }, e._slide = function(e, t) { var n, i, r, o = this,
                        s = this._element.querySelector(j),
                        a = this._getItemIndex(s),
                        l = t || s && this._getItemByDirection(e, s),
                        c = this._getItemIndex(l),
                        u = Boolean(this._interval); if (r = e === k ? (n = "carousel-item-left", i = "carousel-item-next", "left") : (n = "carousel-item-right", i = "carousel-item-prev", "right"), l && p(l).hasClass(L)) this._isSliding = !1;
                    else if (!this._triggerSlideEvent(l, r).isDefaultPrevented() && s && l) { this._isSliding = !0, u && this.pause(), this._setActiveIndicatorElement(l); var f = p.Event(O.SLID, { relatedTarget: l, direction: r, from: a, to: c }); if (p(this._element).hasClass("slide")) { p(l).addClass(i), m.reflow(l), p(s).addClass(n), p(l).addClass(n); var d = parseInt(l.getAttribute("data-interval"), 10);
                            this._config.interval = d ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, d) : this._config.defaultInterval || this._config.interval; var h = m.getTransitionDurationFromElement(s);
                            p(s).one(m.TRANSITION_END, function() { p(l).removeClass(n + " " + i).addClass(L), p(s).removeClass(L + " " + i + " " + n), o._isSliding = !1, setTimeout(function() { return p(o._element).trigger(f) }, 0) }).emulateTransitionEnd(h) } else p(s).removeClass(L), p(l).addClass(L), this._isSliding = !1, p(this._element).trigger(f);
                        u && this.cycle() } }, o._jQueryInterface = function(i) { return this.each(function() { var e = p(this).data(T),
                            t = l({}, A, p(this).data()); "object" == typeof i && (t = l({}, t, i)); var n = "string" == typeof i ? i : t.slide; if (e || (e = new o(this, t), p(this).data(T, e)), "number" == typeof i) e.to(i);
                        else if ("string" == typeof n) { if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                            e[n]() } else t.interval && t.ride && (e.pause(), e.cycle()) }) }, o._dataApiClickHandler = function(e) { var t = m.getSelectorFromElement(this); if (t) { var n = p(t)[0]; if (n && p(n).hasClass("carousel")) { var i = l({}, p(n).data(), p(this).data()),
                                r = this.getAttribute("data-slide-to");
                            r && (i.interval = !1), o._jQueryInterface.call(p(n), i), r && p(n).data(T).to(r), e.preventDefault() } } }, s(o, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return A } }]), o }();
        p(document).on(O.CLICK_DATA_API, "[data-slide], [data-slide-to]", H._dataApiClickHandler), p(window).on(O.LOAD_DATA_API, function() { for (var e = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), t = 0, n = e.length; t < n; t++) { var i = p(e[t]);
                H._jQueryInterface.call(i, i.data()) } }), p.fn[E] = H._jQueryInterface, p.fn[E].Constructor = H, p.fn[E].noConflict = function() { return p.fn[E] = I, H._jQueryInterface }; var R = "collapse",
            W = "bs.collapse",
            M = "." + W,
            q = p.fn[R],
            Y = { toggle: !0, parent: "" },
            X = { toggle: "boolean", parent: "(string|element)" },
            B = { SHOW: "show" + M, SHOWN: "shown" + M, HIDE: "hide" + M, HIDDEN: "hidden" + M, CLICK_DATA_API: "click" + M + ".data-api" },
            $ = "show",
            F = "collapse",
            U = "collapsing",
            z = "collapsed",
            K = '[data-toggle="collapse"]',
            Q = function() {
                function a(t, e) { this._isTransitioning = !1, this._element = t, this._config = this._getConfig(e), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + t.id + '"],[data-toggle="collapse"][data-target="#' + t.id + '"]')); for (var n = [].slice.call(document.querySelectorAll(K)), i = 0, r = n.length; i < r; i++) { var o = n[i],
                            s = m.getSelectorFromElement(o),
                            a = [].slice.call(document.querySelectorAll(s)).filter(function(e) { return e === t });
                        null !== s && 0 < a.length && (this._selector = s, this._triggerArray.push(o)) }
                    this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle() } var e = a.prototype; return e.toggle = function() { p(this._element).hasClass($) ? this.hide() : this.show() }, e.show = function() { var e, t, n = this; if (!(this._isTransitioning || p(this._element).hasClass($) || (this._parent && 0 === (e = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function(e) { return "string" == typeof n._config.parent ? e.getAttribute("data-parent") === n._config.parent : e.classList.contains(F) })).length && (e = null), e && (t = p(e).not(this._selector).data(W)) && t._isTransitioning))) { var i = p.Event(B.SHOW); if (p(this._element).trigger(i), !i.isDefaultPrevented()) { e && (a._jQueryInterface.call(p(e).not(this._selector), "hide"), t || p(e).data(W, null)); var r = this._getDimension();
                            p(this._element).removeClass(F).addClass(U), this._element.style[r] = 0, this._triggerArray.length && p(this._triggerArray).removeClass(z).attr("aria-expanded", !0), this.setTransitioning(!0); var o = "scroll" + (r[0].toUpperCase() + r.slice(1)),
                                s = m.getTransitionDurationFromElement(this._element);
                            p(this._element).one(m.TRANSITION_END, function() { p(n._element).removeClass(U).addClass(F).addClass($), n._element.style[r] = "", n.setTransitioning(!1), p(n._element).trigger(B.SHOWN) }).emulateTransitionEnd(s), this._element.style[r] = this._element[o] + "px" } } }, e.hide = function() { var e = this; if (!this._isTransitioning && p(this._element).hasClass($)) { var t = p.Event(B.HIDE); if (p(this._element).trigger(t), !t.isDefaultPrevented()) { var n = this._getDimension();
                            this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", m.reflow(this._element), p(this._element).addClass(U).removeClass(F).removeClass($); var i = this._triggerArray.length; if (0 < i)
                                for (var r = 0; r < i; r++) { var o = this._triggerArray[r],
                                        s = m.getSelectorFromElement(o);
                                    null !== s && (p([].slice.call(document.querySelectorAll(s))).hasClass($) || p(o).addClass(z).attr("aria-expanded", !1)) }
                            this.setTransitioning(!0), this._element.style[n] = ""; var a = m.getTransitionDurationFromElement(this._element);
                            p(this._element).one(m.TRANSITION_END, function() { e.setTransitioning(!1), p(e._element).removeClass(U).addClass(F).trigger(B.HIDDEN) }).emulateTransitionEnd(a) } } }, e.setTransitioning = function(e) { this._isTransitioning = e }, e.dispose = function() { p.removeData(this._element, W), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null }, e._getConfig = function(e) { return (e = l({}, Y, e)).toggle = Boolean(e.toggle), m.typeCheckConfig(R, e, X), e }, e._getDimension = function() { return p(this._element).hasClass("width") ? "width" : "height" }, e._getParent = function() { var e, n = this;
                    m.isElement(this._config.parent) ? (e = this._config.parent, void 0 !== this._config.parent.jquery && (e = this._config.parent[0])) : e = document.querySelector(this._config.parent); var t = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                        i = [].slice.call(e.querySelectorAll(t)); return p(i).each(function(e, t) { n._addAriaAndCollapsedClass(a._getTargetFromElement(t), [t]) }), e }, e._addAriaAndCollapsedClass = function(e, t) { var n = p(e).hasClass($);
                    t.length && p(t).toggleClass(z, !n).attr("aria-expanded", n) }, a._getTargetFromElement = function(e) { var t = m.getSelectorFromElement(e); return t ? document.querySelector(t) : null }, a._jQueryInterface = function(i) { return this.each(function() { var e = p(this),
                            t = e.data(W),
                            n = l({}, Y, e.data(), "object" == typeof i && i ? i : {}); if (!t && n.toggle && /show|hide/.test(i) && (n.toggle = !1), t || (t = new a(this, n), e.data(W, t)), "string" == typeof i) { if (void 0 === t[i]) throw new TypeError('No method named "' + i + '"');
                            t[i]() } }) }, s(a, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return Y } }]), a }();
        p(document).on(B.CLICK_DATA_API, K, function(e) { "A" === e.currentTarget.tagName && e.preventDefault(); var n = p(this),
                t = m.getSelectorFromElement(this),
                i = [].slice.call(document.querySelectorAll(t));
            p(i).each(function() { var e = p(this),
                    t = e.data(W) ? "toggle" : n.data();
                Q._jQueryInterface.call(e, t) }) }), p.fn[R] = Q._jQueryInterface, p.fn[R].Constructor = Q, p.fn[R].noConflict = function() { return p.fn[R] = q, Q._jQueryInterface }; var V = "dropdown",
            G = "bs.dropdown",
            Z = "." + G,
            J = ".data-api",
            ee = p.fn[V],
            te = new RegExp("38|40|27"),
            ne = { HIDE: "hide" + Z, HIDDEN: "hidden" + Z, SHOW: "show" + Z, SHOWN: "shown" + Z, CLICK: "click" + Z, CLICK_DATA_API: "click" + Z + J, KEYDOWN_DATA_API: "keydown" + Z + J, KEYUP_DATA_API: "keyup" + Z + J },
            ie = "disabled",
            re = "show",
            oe = "dropdown-menu-right",
            se = '[data-toggle="dropdown"]',
            ae = ".dropdown-menu",
            le = { offset: 0, flip: !0, boundary: "scrollParent", reference: "toggle", display: "dynamic" },
            ce = { offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)", reference: "(string|element)", display: "string" },
            ue = function() {
                function c(e, t) { this._element = e, this._popper = null, this._config = this._getConfig(t), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners() } var e = c.prototype; return e.toggle = function() { if (!this._element.disabled && !p(this._element).hasClass(ie)) { var e = c._getParentFromElement(this._element),
                            t = p(this._menu).hasClass(re); if (c._clearMenus(), !t) { var n = { relatedTarget: this._element },
                                i = p.Event(ne.SHOW, n); if (p(e).trigger(i), !i.isDefaultPrevented()) { if (!this._inNavbar) { if (void 0 === f) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)"); var r = this._element; "parent" === this._config.reference ? r = e : m.isElement(this._config.reference) && (r = this._config.reference, void 0 !== this._config.reference.jquery && (r = this._config.reference[0])), "scrollParent" !== this._config.boundary && p(e).addClass("position-static"), this._popper = new f(r, this._menu, this._getPopperConfig()) } "ontouchstart" in document.documentElement && 0 === p(e).closest(".navbar-nav").length && p(document.body).children().on("mouseover", null, p.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), p(this._menu).toggleClass(re), p(e).toggleClass(re).trigger(p.Event(ne.SHOWN, n)) } } } }, e.show = function() { if (!(this._element.disabled || p(this._element).hasClass(ie) || p(this._menu).hasClass(re))) { var e = { relatedTarget: this._element },
                            t = p.Event(ne.SHOW, e),
                            n = c._getParentFromElement(this._element);
                        p(n).trigger(t), t.isDefaultPrevented() || (p(this._menu).toggleClass(re), p(n).toggleClass(re).trigger(p.Event(ne.SHOWN, e))) } }, e.hide = function() { if (!this._element.disabled && !p(this._element).hasClass(ie) && p(this._menu).hasClass(re)) { var e = { relatedTarget: this._element },
                            t = p.Event(ne.HIDE, e),
                            n = c._getParentFromElement(this._element);
                        p(n).trigger(t), t.isDefaultPrevented() || (p(this._menu).toggleClass(re), p(n).toggleClass(re).trigger(p.Event(ne.HIDDEN, e))) } }, e.dispose = function() { p.removeData(this._element, G), p(this._element).off(Z), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null) }, e.update = function() { this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate() }, e._addEventListeners = function() { var t = this;
                    p(this._element).on(ne.CLICK, function(e) { e.preventDefault(), e.stopPropagation(), t.toggle() }) }, e._getConfig = function(e) { return e = l({}, this.constructor.Default, p(this._element).data(), e), m.typeCheckConfig(V, e, this.constructor.DefaultType), e }, e._getMenuElement = function() { if (!this._menu) { var e = c._getParentFromElement(this._element);
                        e && (this._menu = e.querySelector(ae)) } return this._menu }, e._getPlacement = function() { var e = p(this._element.parentNode),
                        t = "bottom-start"; return e.hasClass("dropup") ? (t = "top-start", p(this._menu).hasClass(oe) && (t = "top-end")) : e.hasClass("dropright") ? t = "right-start" : e.hasClass("dropleft") ? t = "left-start" : p(this._menu).hasClass(oe) && (t = "bottom-end"), t }, e._detectNavbar = function() { return 0 < p(this._element).closest(".navbar").length }, e._getOffset = function() { var t = this,
                        e = {}; return "function" == typeof this._config.offset ? e.fn = function(e) { return e.offsets = l({}, e.offsets, t._config.offset(e.offsets, t._element) || {}), e } : e.offset = this._config.offset, e }, e._getPopperConfig = function() { var e = { placement: this._getPlacement(), modifiers: { offset: this._getOffset(), flip: { enabled: this._config.flip }, preventOverflow: { boundariesElement: this._config.boundary } } }; return "static" === this._config.display && (e.modifiers.applyStyle = { enabled: !1 }), e }, c._jQueryInterface = function(t) { return this.each(function() { var e = p(this).data(G); if (e || (e = new c(this, "object" == typeof t ? t : null), p(this).data(G, e)), "string" == typeof t) { if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                            e[t]() } }) }, c._clearMenus = function(e) { if (!e || 3 !== e.which && ("keyup" !== e.type || 9 === e.which))
                        for (var t = [].slice.call(document.querySelectorAll(se)), n = 0, i = t.length; n < i; n++) { var r = c._getParentFromElement(t[n]),
                                o = p(t[n]).data(G),
                                s = { relatedTarget: t[n] }; if (e && "click" === e.type && (s.clickEvent = e), o) { var a = o._menu; if (p(r).hasClass(re) && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && 9 === e.which) && p.contains(r, e.target))) { var l = p.Event(ne.HIDE, s);
                                    p(r).trigger(l), l.isDefaultPrevented() || ("ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), t[n].setAttribute("aria-expanded", "false"), p(a).removeClass(re), p(r).removeClass(re).trigger(p.Event(ne.HIDDEN, s))) } } } }, c._getParentFromElement = function(e) { var t, n = m.getSelectorFromElement(e); return n && (t = document.querySelector(n)), t || e.parentNode }, c._dataApiKeydownHandler = function(e) { if ((/input|textarea/i.test(e.target.tagName) ? !(32 === e.which || 27 !== e.which && (40 !== e.which && 38 !== e.which || p(e.target).closest(ae).length)) : te.test(e.which)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !p(this).hasClass(ie))) { var t = c._getParentFromElement(this),
                            n = p(t).hasClass(re); if (n && (!n || 27 !== e.which && 32 !== e.which)) { var i = [].slice.call(t.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")); if (0 !== i.length) { var r = i.indexOf(e.target);
                                38 === e.which && 0 < r && r--, 40 === e.which && r < i.length - 1 && r++, r < 0 && (r = 0), i[r].focus() } } else { if (27 === e.which) { var o = t.querySelector(se);
                                p(o).trigger("focus") }
                            p(this).trigger("click") } } }, s(c, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return le } }, { key: "DefaultType", get: function() { return ce } }]), c }();
        p(document).on(ne.KEYDOWN_DATA_API, se, ue._dataApiKeydownHandler).on(ne.KEYDOWN_DATA_API, ae, ue._dataApiKeydownHandler).on(ne.CLICK_DATA_API + " " + ne.KEYUP_DATA_API, ue._clearMenus).on(ne.CLICK_DATA_API, se, function(e) { e.preventDefault(), e.stopPropagation(), ue._jQueryInterface.call(p(this), "toggle") }).on(ne.CLICK_DATA_API, ".dropdown form", function(e) { e.stopPropagation() }), p.fn[V] = ue._jQueryInterface, p.fn[V].Constructor = ue, p.fn[V].noConflict = function() { return p.fn[V] = ee, ue._jQueryInterface }; var fe = "modal",
            de = "bs.modal",
            he = "." + de,
            pe = p.fn[fe],
            me = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
            ge = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
            ve = { HIDE: "hide" + he, HIDDEN: "hidden" + he, SHOW: "show" + he, SHOWN: "shown" + he, FOCUSIN: "focusin" + he, RESIZE: "resize" + he, CLICK_DISMISS: "click.dismiss" + he, KEYDOWN_DISMISS: "keydown.dismiss" + he, MOUSEUP_DISMISS: "mouseup.dismiss" + he, MOUSEDOWN_DISMISS: "mousedown.dismiss" + he, CLICK_DATA_API: "click" + he + ".data-api" },
            ye = "modal-open",
            be = "fade",
            _e = "show",
            we = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
            Ce = ".sticky-top",
            Ee = function() {
                function r(e, t) { this._config = this._getConfig(t), this._element = e, this._dialog = e.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0 } var e = r.prototype; return e.toggle = function(e) { return this._isShown ? this.hide() : this.show(e) }, e.show = function(e) { var t = this; if (!this._isShown && !this._isTransitioning) { p(this._element).hasClass(be) && (this._isTransitioning = !0); var n = p.Event(ve.SHOW, { relatedTarget: e });
                        p(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), p(this._element).on(ve.CLICK_DISMISS, '[data-dismiss="modal"]', function(e) { return t.hide(e) }), p(this._dialog).on(ve.MOUSEDOWN_DISMISS, function() { p(t._element).one(ve.MOUSEUP_DISMISS, function(e) { p(e.target).is(t._element) && (t._ignoreBackdropClick = !0) }) }), this._showBackdrop(function() { return t._showElement(e) })) } }, e.hide = function(e) { var t = this; if (e && e.preventDefault(), this._isShown && !this._isTransitioning) { var n = p.Event(ve.HIDE); if (p(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) { this._isShown = !1; var i = p(this._element).hasClass(be); if (i && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), p(document).off(ve.FOCUSIN), p(this._element).removeClass(_e), p(this._element).off(ve.CLICK_DISMISS), p(this._dialog).off(ve.MOUSEDOWN_DISMISS), i) { var r = m.getTransitionDurationFromElement(this._element);
                                p(this._element).one(m.TRANSITION_END, function(e) { return t._hideModal(e) }).emulateTransitionEnd(r) } else this._hideModal() } } }, e.dispose = function() {
                    [window, this._element, this._dialog].forEach(function(e) { return p(e).off(he) }), p(document).off(ve.FOCUSIN), p.removeData(this._element, de), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null }, e.handleUpdate = function() { this._adjustDialog() }, e._getConfig = function(e) { return e = l({}, me, e), m.typeCheckConfig(fe, e, ge), e }, e._showElement = function(e) { var t = this,
                        n = p(this._element).hasClass(be);
                    this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), p(this._dialog).hasClass("modal-dialog-scrollable") ? this._dialog.querySelector(".modal-body").scrollTop = 0 : this._element.scrollTop = 0, n && m.reflow(this._element), p(this._element).addClass(_e), this._config.focus && this._enforceFocus(); var i = p.Event(ve.SHOWN, { relatedTarget: e }),
                        r = function() { t._config.focus && t._element.focus(), t._isTransitioning = !1, p(t._element).trigger(i) }; if (n) { var o = m.getTransitionDurationFromElement(this._dialog);
                        p(this._dialog).one(m.TRANSITION_END, r).emulateTransitionEnd(o) } else r() }, e._enforceFocus = function() { var t = this;
                    p(document).off(ve.FOCUSIN).on(ve.FOCUSIN, function(e) { document !== e.target && t._element !== e.target && 0 === p(t._element).has(e.target).length && t._element.focus() }) }, e._setEscapeEvent = function() { var t = this;
                    this._isShown && this._config.keyboard ? p(this._element).on(ve.KEYDOWN_DISMISS, function(e) { 27 === e.which && (e.preventDefault(), t.hide()) }) : this._isShown || p(this._element).off(ve.KEYDOWN_DISMISS) }, e._setResizeEvent = function() { var t = this;
                    this._isShown ? p(window).on(ve.RESIZE, function(e) { return t.handleUpdate(e) }) : p(window).off(ve.RESIZE) }, e._hideModal = function() { var e = this;
                    this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop(function() { p(document.body).removeClass(ye), e._resetAdjustments(), e._resetScrollbar(), p(e._element).trigger(ve.HIDDEN) }) }, e._removeBackdrop = function() { this._backdrop && (p(this._backdrop).remove(), this._backdrop = null) }, e._showBackdrop = function(e) { var t = this,
                        n = p(this._element).hasClass(be) ? be : ""; if (this._isShown && this._config.backdrop) { if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), p(this._backdrop).appendTo(document.body), p(this._element).on(ve.CLICK_DISMISS, function(e) { t._ignoreBackdropClick ? t._ignoreBackdropClick = !1 : e.target === e.currentTarget && ("static" === t._config.backdrop ? t._element.focus() : t.hide()) }), n && m.reflow(this._backdrop), p(this._backdrop).addClass(_e), !e) return; if (!n) return void e(); var i = m.getTransitionDurationFromElement(this._backdrop);
                        p(this._backdrop).one(m.TRANSITION_END, e).emulateTransitionEnd(i) } else if (!this._isShown && this._backdrop) { p(this._backdrop).removeClass(_e); var r = function() { t._removeBackdrop(), e && e() }; if (p(this._element).hasClass(be)) { var o = m.getTransitionDurationFromElement(this._backdrop);
                            p(this._backdrop).one(m.TRANSITION_END, r).emulateTransitionEnd(o) } else r() } else e && e() }, e._adjustDialog = function() { var e = this._element.scrollHeight > document.documentElement.clientHeight;!this._isBodyOverflowing && e && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !e && (this._element.style.paddingRight = this._scrollbarWidth + "px") }, e._resetAdjustments = function() { this._element.style.paddingLeft = "", this._element.style.paddingRight = "" }, e._checkScrollbar = function() { var e = document.body.getBoundingClientRect();
                    this._isBodyOverflowing = e.left + e.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth() }, e._setScrollbar = function() { var r = this; if (this._isBodyOverflowing) { var e = [].slice.call(document.querySelectorAll(we)),
                            t = [].slice.call(document.querySelectorAll(Ce));
                        p(e).each(function(e, t) { var n = t.style.paddingRight,
                                i = p(t).css("padding-right");
                            p(t).data("padding-right", n).css("padding-right", parseFloat(i) + r._scrollbarWidth + "px") }), p(t).each(function(e, t) { var n = t.style.marginRight,
                                i = p(t).css("margin-right");
                            p(t).data("margin-right", n).css("margin-right", parseFloat(i) - r._scrollbarWidth + "px") }); var n = document.body.style.paddingRight,
                            i = p(document.body).css("padding-right");
                        p(document.body).data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px") }
                    p(document.body).addClass(ye) }, e._resetScrollbar = function() { var e = [].slice.call(document.querySelectorAll(we));
                    p(e).each(function(e, t) { var n = p(t).data("padding-right");
                        p(t).removeData("padding-right"), t.style.paddingRight = n || "" }); var t = [].slice.call(document.querySelectorAll("" + Ce));
                    p(t).each(function(e, t) { var n = p(t).data("margin-right");
                        void 0 !== n && p(t).css("margin-right", n).removeData("margin-right") }); var n = p(document.body).data("padding-right");
                    p(document.body).removeData("padding-right"), document.body.style.paddingRight = n || "" }, e._getScrollbarWidth = function() { var e = document.createElement("div");
                    e.className = "modal-scrollbar-measure", document.body.appendChild(e); var t = e.getBoundingClientRect().width - e.clientWidth; return document.body.removeChild(e), t }, r._jQueryInterface = function(n, i) { return this.each(function() { var e = p(this).data(de),
                            t = l({}, me, p(this).data(), "object" == typeof n && n ? n : {}); if (e || (e = new r(this, t), p(this).data(de, e)), "string" == typeof n) { if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                            e[n](i) } else t.show && e.show(i) }) }, s(r, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return me } }]), r }();
        p(document).on(ve.CLICK_DATA_API, '[data-toggle="modal"]', function(e) { var t, n = this,
                i = m.getSelectorFromElement(this);
            i && (t = document.querySelector(i)); var r = p(t).data(de) ? "toggle" : l({}, p(t).data(), p(this).data()); "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault(); var o = p(t).one(ve.SHOW, function(e) { e.isDefaultPrevented() || o.one(ve.HIDDEN, function() { p(n).is(":visible") && n.focus() }) });
            Ee._jQueryInterface.call(p(t), r, this) }), p.fn[fe] = Ee._jQueryInterface, p.fn[fe].Constructor = Ee, p.fn[fe].noConflict = function() { return p.fn[fe] = pe, Ee._jQueryInterface }; var Te = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
            xe = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:/?#]*(?:[/?#]|$))/gi,
            Se = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+/]+=*$/i;

        function Ie(e, s, t) { if (0 === e.length) return e; if (t && "function" == typeof t) return t(e); for (var n = (new window.DOMParser).parseFromString(e, "text/html"), a = Object.keys(s), l = [].slice.call(n.body.querySelectorAll("*")), i = function(e, t) { var n = l[e],
                        i = n.nodeName.toLowerCase(); if (-1 === a.indexOf(n.nodeName.toLowerCase())) return n.parentNode.removeChild(n), "continue"; var r = [].slice.call(n.attributes),
                        o = [].concat(s["*"] || [], s[i] || []);
                    r.forEach(function(e) {
                        (function(e, t) { var n = e.nodeName.toLowerCase(); if (-1 !== t.indexOf(n)) return -1 === Te.indexOf(n) || Boolean(e.nodeValue.match(xe) || e.nodeValue.match(Se)); for (var i = t.filter(function(e) { return e instanceof RegExp }), r = 0, o = i.length; r < o; r++)
                                if (n.match(i[r])) return !0;
                            return !1 })(e, o) || n.removeAttribute(e.nodeName) }) }, r = 0, o = l.length; r < o; r++) i(r); return n.body.innerHTML } var Ae = "tooltip",
            De = "bs.tooltip",
            ke = "." + De,
            Ne = p.fn[Ae],
            Oe = "bs-tooltip",
            Le = new RegExp("(^|\\s)" + Oe + "\\S+", "g"),
            je = ["sanitize", "whiteList", "sanitizeFn"],
            Pe = { animation: "boolean", template: "string", title: "(string|element|function)", trigger: "string", delay: "(number|object)", html: "boolean", selector: "(string|boolean)", placement: "(string|function)", offset: "(number|string|function)", container: "(string|element|boolean)", fallbackPlacement: "(string|array)", boundary: "(string|element)", sanitize: "boolean", sanitizeFn: "(null|function)", whiteList: "object" },
            He = { AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left" },
            Re = { animation: !0, template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, selector: !1, placement: "top", offset: 0, container: !1, fallbackPlacement: "flip", boundary: "scrollParent", sanitize: !0, sanitizeFn: null, whiteList: { "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i], a: ["target", "href", "title", "rel"], area: [], b: [], br: [], col: [], code: [], div: [], em: [], hr: [], h1: [], h2: [], h3: [], h4: [], h5: [], h6: [], i: [], img: ["src", "alt", "title", "width", "height"], li: [], ol: [], p: [], pre: [], s: [], small: [], span: [], sub: [], sup: [], strong: [], u: [], ul: [] } },
            We = "show",
            Me = { HIDE: "hide" + ke, HIDDEN: "hidden" + ke, SHOW: "show" + ke, SHOWN: "shown" + ke, INSERTED: "inserted" + ke, CLICK: "click" + ke, FOCUSIN: "focusin" + ke, FOCUSOUT: "focusout" + ke, MOUSEENTER: "mouseenter" + ke, MOUSELEAVE: "mouseleave" + ke },
            qe = "fade",
            Ye = "show",
            Xe = "hover",
            Be = "focus",
            $e = function() {
                function i(e, t) { if (void 0 === f) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
                    this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = e, this.config = this._getConfig(t), this.tip = null, this._setListeners() } var e = i.prototype; return e.enable = function() { this._isEnabled = !0 }, e.disable = function() { this._isEnabled = !1 }, e.toggleEnabled = function() { this._isEnabled = !this._isEnabled }, e.toggle = function(e) { if (this._isEnabled)
                        if (e) { var t = this.constructor.DATA_KEY,
                                n = p(e.currentTarget).data(t);
                            n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), p(e.currentTarget).data(t, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n) } else { if (p(this.getTipElement()).hasClass(Ye)) return void this._leave(null, this);
                            this._enter(null, this) } }, e.dispose = function() { clearTimeout(this._timeout), p.removeData(this.element, this.constructor.DATA_KEY), p(this.element).off(this.constructor.EVENT_KEY), p(this.element).closest(".modal").off("hide.bs.modal"), this.tip && p(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, (this._activeTrigger = null) !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null }, e.show = function() { var t = this; if ("none" === p(this.element).css("display")) throw new Error("Please use show on visible elements"); var e = p.Event(this.constructor.Event.SHOW); if (this.isWithContent() && this._isEnabled) { p(this.element).trigger(e); var n = m.findShadowRoot(this.element),
                            i = p.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element); if (e.isDefaultPrevented() || !i) return; var r = this.getTipElement(),
                            o = m.getUID(this.constructor.NAME);
                        r.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && p(r).addClass(qe); var s = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                            a = this._getAttachment(s);
                        this.addAttachmentClass(a); var l = this._getContainer();
                        p(r).data(this.constructor.DATA_KEY, this), p.contains(this.element.ownerDocument.documentElement, this.tip) || p(r).appendTo(l), p(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new f(this.element, r, { placement: a, modifiers: { offset: this._getOffset(), flip: { behavior: this.config.fallbackPlacement }, arrow: { element: ".arrow" }, preventOverflow: { boundariesElement: this.config.boundary } }, onCreate: function(e) { e.originalPlacement !== e.placement && t._handlePopperPlacementChange(e) }, onUpdate: function(e) { return t._handlePopperPlacementChange(e) } }), p(r).addClass(Ye), "ontouchstart" in document.documentElement && p(document.body).children().on("mouseover", null, p.noop); var c = function() { t.config.animation && t._fixTransition(); var e = t._hoverState;
                            t._hoverState = null, p(t.element).trigger(t.constructor.Event.SHOWN), "out" === e && t._leave(null, t) }; if (p(this.tip).hasClass(qe)) { var u = m.getTransitionDurationFromElement(this.tip);
                            p(this.tip).one(m.TRANSITION_END, c).emulateTransitionEnd(u) } else c() } }, e.hide = function(e) { var t = this,
                        n = this.getTipElement(),
                        i = p.Event(this.constructor.Event.HIDE),
                        r = function() { t._hoverState !== We && n.parentNode && n.parentNode.removeChild(n), t._cleanTipClass(), t.element.removeAttribute("aria-describedby"), p(t.element).trigger(t.constructor.Event.HIDDEN), null !== t._popper && t._popper.destroy(), e && e() }; if (p(this.element).trigger(i), !i.isDefaultPrevented()) { if (p(n).removeClass(Ye), "ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), this._activeTrigger.click = !1, this._activeTrigger[Be] = !1, this._activeTrigger[Xe] = !1, p(this.tip).hasClass(qe)) { var o = m.getTransitionDurationFromElement(n);
                            p(n).one(m.TRANSITION_END, r).emulateTransitionEnd(o) } else r();
                        this._hoverState = "" } }, e.update = function() { null !== this._popper && this._popper.scheduleUpdate() }, e.isWithContent = function() { return Boolean(this.getTitle()) }, e.addAttachmentClass = function(e) { p(this.getTipElement()).addClass(Oe + "-" + e) }, e.getTipElement = function() { return this.tip = this.tip || p(this.config.template)[0], this.tip }, e.setContent = function() { var e = this.getTipElement();
                    this.setElementContent(p(e.querySelectorAll(".tooltip-inner")), this.getTitle()), p(e).removeClass(qe + " " + Ye) }, e.setElementContent = function(e, t) { "object" != typeof t || !t.nodeType && !t.jquery ? this.config.html ? (this.config.sanitize && (t = Ie(t, this.config.whiteList, this.config.sanitizeFn)), e.html(t)) : e.text(t) : this.config.html ? p(t).parent().is(e) || e.empty().append(t) : e.text(p(t).text()) }, e.getTitle = function() { var e = this.element.getAttribute("data-original-title"); return e || (e = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), e }, e._getOffset = function() { var t = this,
                        e = {}; return "function" == typeof this.config.offset ? e.fn = function(e) { return e.offsets = l({}, e.offsets, t.config.offset(e.offsets, t.element) || {}), e } : e.offset = this.config.offset, e }, e._getContainer = function() { return !1 === this.config.container ? document.body : m.isElement(this.config.container) ? p(this.config.container) : p(document).find(this.config.container) }, e._getAttachment = function(e) { return He[e.toUpperCase()] }, e._setListeners = function() { var i = this;
                    this.config.trigger.split(" ").forEach(function(e) { if ("click" === e) p(i.element).on(i.constructor.Event.CLICK, i.config.selector, function(e) { return i.toggle(e) });
                        else if ("manual" !== e) { var t = e === Xe ? i.constructor.Event.MOUSEENTER : i.constructor.Event.FOCUSIN,
                                n = e === Xe ? i.constructor.Event.MOUSELEAVE : i.constructor.Event.FOCUSOUT;
                            p(i.element).on(t, i.config.selector, function(e) { return i._enter(e) }).on(n, i.config.selector, function(e) { return i._leave(e) }) } }), p(this.element).closest(".modal").on("hide.bs.modal", function() { i.element && i.hide() }), this.config.selector ? this.config = l({}, this.config, { trigger: "manual", selector: "" }) : this._fixTitle() }, e._fixTitle = function() { var e = typeof this.element.getAttribute("data-original-title");
                    (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", "")) }, e._enter = function(e, t) { var n = this.constructor.DATA_KEY;
                    (t = t || p(e.currentTarget).data(n)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), p(e.currentTarget).data(n, t)), e && (t._activeTrigger["focusin" === e.type ? Be : Xe] = !0), p(t.getTipElement()).hasClass(Ye) || t._hoverState === We ? t._hoverState = We : (clearTimeout(t._timeout), t._hoverState = We, t.config.delay && t.config.delay.show ? t._timeout = setTimeout(function() { t._hoverState === We && t.show() }, t.config.delay.show) : t.show()) }, e._leave = function(e, t) { var n = this.constructor.DATA_KEY;
                    (t = t || p(e.currentTarget).data(n)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), p(e.currentTarget).data(n, t)), e && (t._activeTrigger["focusout" === e.type ? Be : Xe] = !1), t._isWithActiveTrigger() || (clearTimeout(t._timeout), t._hoverState = "out", t.config.delay && t.config.delay.hide ? t._timeout = setTimeout(function() { "out" === t._hoverState && t.hide() }, t.config.delay.hide) : t.hide()) }, e._isWithActiveTrigger = function() { for (var e in this._activeTrigger)
                        if (this._activeTrigger[e]) return !0;
                    return !1 }, e._getConfig = function(e) { var t = p(this.element).data(); return Object.keys(t).forEach(function(e) {-1 !== je.indexOf(e) && delete t[e] }), "number" == typeof(e = l({}, this.constructor.Default, t, "object" == typeof e && e ? e : {})).delay && (e.delay = { show: e.delay, hide: e.delay }), "number" == typeof e.title && (e.title = e.title.toString()), "number" == typeof e.content && (e.content = e.content.toString()), m.typeCheckConfig(Ae, e, this.constructor.DefaultType), e.sanitize && (e.template = Ie(e.template, e.whiteList, e.sanitizeFn)), e }, e._getDelegateConfig = function() { var e = {}; if (this.config)
                        for (var t in this.config) this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]); return e }, e._cleanTipClass = function() { var e = p(this.getTipElement()),
                        t = e.attr("class").match(Le);
                    null !== t && t.length && e.removeClass(t.join("")) }, e._handlePopperPlacementChange = function(e) { var t = e.instance;
                    this.tip = t.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(e.placement)) }, e._fixTransition = function() { var e = this.getTipElement(),
                        t = this.config.animation;
                    null === e.getAttribute("x-placement") && (p(e).removeClass(qe), this.config.animation = !1, this.hide(), this.show(), this.config.animation = t) }, i._jQueryInterface = function(n) { return this.each(function() { var e = p(this).data(De),
                            t = "object" == typeof n && n; if ((e || !/dispose|hide/.test(n)) && (e || (e = new i(this, t), p(this).data(De, e)), "string" == typeof n)) { if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                            e[n]() } }) }, s(i, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return Re } }, { key: "NAME", get: function() { return Ae } }, { key: "DATA_KEY", get: function() { return De } }, { key: "Event", get: function() { return Me } }, { key: "EVENT_KEY", get: function() { return ke } }, { key: "DefaultType", get: function() { return Pe } }]), i }();
        p.fn[Ae] = $e._jQueryInterface, p.fn[Ae].Constructor = $e, p.fn[Ae].noConflict = function() { return p.fn[Ae] = Ne, $e._jQueryInterface }; var Fe = "popover",
            Ue = "bs.popover",
            ze = "." + Ue,
            Ke = p.fn[Fe],
            Qe = "bs-popover",
            Ve = new RegExp("(^|\\s)" + Qe + "\\S+", "g"),
            Ge = l({}, $e.Default, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' }),
            Ze = l({}, $e.DefaultType, { content: "(string|element|function)" }),
            Je = { HIDE: "hide" + ze, HIDDEN: "hidden" + ze, SHOW: "show" + ze, SHOWN: "shown" + ze, INSERTED: "inserted" + ze, CLICK: "click" + ze, FOCUSIN: "focusin" + ze, FOCUSOUT: "focusout" + ze, MOUSEENTER: "mouseenter" + ze, MOUSELEAVE: "mouseleave" + ze },
            et = function(e) { var t, n;

                function i() { return e.apply(this, arguments) || this }
                n = e, (t = i).prototype = Object.create(n.prototype), (t.prototype.constructor = t).__proto__ = n; var r = i.prototype; return r.isWithContent = function() { return this.getTitle() || this._getContent() }, r.addAttachmentClass = function(e) { p(this.getTipElement()).addClass(Qe + "-" + e) }, r.getTipElement = function() { return this.tip = this.tip || p(this.config.template)[0], this.tip }, r.setContent = function() { var e = p(this.getTipElement());
                    this.setElementContent(e.find(".popover-header"), this.getTitle()); var t = this._getContent(); "function" == typeof t && (t = t.call(this.element)), this.setElementContent(e.find(".popover-body"), t), e.removeClass("fade show") }, r._getContent = function() { return this.element.getAttribute("data-content") || this.config.content }, r._cleanTipClass = function() { var e = p(this.getTipElement()),
                        t = e.attr("class").match(Ve);
                    null !== t && 0 < t.length && e.removeClass(t.join("")) }, i._jQueryInterface = function(n) { return this.each(function() { var e = p(this).data(Ue),
                            t = "object" == typeof n ? n : null; if ((e || !/dispose|hide/.test(n)) && (e || (e = new i(this, t), p(this).data(Ue, e)), "string" == typeof n)) { if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                            e[n]() } }) }, s(i, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return Ge } }, { key: "NAME", get: function() { return Fe } }, { key: "DATA_KEY", get: function() { return Ue } }, { key: "Event", get: function() { return Je } }, { key: "EVENT_KEY", get: function() { return ze } }, { key: "DefaultType", get: function() { return Ze } }]), i }($e);
        p.fn[Fe] = et._jQueryInterface, p.fn[Fe].Constructor = et, p.fn[Fe].noConflict = function() { return p.fn[Fe] = Ke, et._jQueryInterface }; var tt = "scrollspy",
            nt = "bs.scrollspy",
            it = "." + nt,
            rt = p.fn[tt],
            ot = { offset: 10, method: "auto", target: "" },
            st = { offset: "number", method: "string", target: "(string|element)" },
            at = { ACTIVATE: "activate" + it, SCROLL: "scroll" + it, LOAD_DATA_API: "load" + it + ".data-api" },
            lt = "active",
            ct = ".nav, .list-group",
            ut = ".nav-link",
            ft = ".list-group-item",
            dt = "position",
            ht = function() {
                function n(e, t) { var n = this;
                    this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(t), this._selector = this._config.target + " " + ut + "," + this._config.target + " " + ft + "," + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, p(this._scrollElement).on(at.SCROLL, function(e) { return n._process(e) }), this.refresh(), this._process() } var e = n.prototype; return e.refresh = function() { var t = this,
                        e = this._scrollElement === this._scrollElement.window ? "offset" : dt,
                        r = "auto" === this._config.method ? e : this._config.method,
                        o = r === dt ? this._getScrollTop() : 0;
                    this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function(e) { var t, n = m.getSelectorFromElement(e); if (n && (t = document.querySelector(n)), t) { var i = t.getBoundingClientRect(); if (i.width || i.height) return [p(t)[r]().top + o, n] } return null }).filter(function(e) { return e }).sort(function(e, t) { return e[0] - t[0] }).forEach(function(e) { t._offsets.push(e[0]), t._targets.push(e[1]) }) }, e.dispose = function() { p.removeData(this._element, nt), p(this._scrollElement).off(it), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null }, e._getConfig = function(e) { if ("string" != typeof(e = l({}, ot, "object" == typeof e && e ? e : {})).target) { var t = p(e.target).attr("id");
                        t || (t = m.getUID(tt), p(e.target).attr("id", t)), e.target = "#" + t } return m.typeCheckConfig(tt, e, st), e }, e._getScrollTop = function() { return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop }, e._getScrollHeight = function() { return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight) }, e._getOffsetHeight = function() { return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height }, e._process = function() { var e = this._getScrollTop() + this._config.offset,
                        t = this._getScrollHeight(),
                        n = this._config.offset + t - this._getOffsetHeight(); if (this._scrollHeight !== t && this.refresh(), n <= e) { var i = this._targets[this._targets.length - 1];
                        this._activeTarget !== i && this._activate(i) } else { if (this._activeTarget && e < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear(); for (var r = this._offsets.length; r--;) this._activeTarget !== this._targets[r] && e >= this._offsets[r] && (void 0 === this._offsets[r + 1] || e < this._offsets[r + 1]) && this._activate(this._targets[r]) } }, e._activate = function(t) { this._activeTarget = t, this._clear(); var e = this._selector.split(",").map(function(e) { return e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]' }),
                        n = p([].slice.call(document.querySelectorAll(e.join(","))));
                    n.hasClass("dropdown-item") ? (n.closest(".dropdown").find(".dropdown-toggle").addClass(lt), n.addClass(lt)) : (n.addClass(lt), n.parents(ct).prev(ut + ", " + ft).addClass(lt), n.parents(ct).prev(".nav-item").children(ut).addClass(lt)), p(this._scrollElement).trigger(at.ACTIVATE, { relatedTarget: t }) }, e._clear = function() {
                    [].slice.call(document.querySelectorAll(this._selector)).filter(function(e) { return e.classList.contains(lt) }).forEach(function(e) { return e.classList.remove(lt) }) }, n._jQueryInterface = function(t) { return this.each(function() { var e = p(this).data(nt); if (e || (e = new n(this, "object" == typeof t && t), p(this).data(nt, e)), "string" == typeof t) { if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                            e[t]() } }) }, s(n, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "Default", get: function() { return ot } }]), n }();
        p(window).on(at.LOAD_DATA_API, function() { for (var e = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), t = e.length; t--;) { var n = p(e[t]);
                ht._jQueryInterface.call(n, n.data()) } }), p.fn[tt] = ht._jQueryInterface, p.fn[tt].Constructor = ht, p.fn[tt].noConflict = function() { return p.fn[tt] = rt, ht._jQueryInterface }; var pt = "bs.tab",
            mt = "." + pt,
            gt = p.fn.tab,
            vt = { HIDE: "hide" + mt, HIDDEN: "hidden" + mt, SHOW: "show" + mt, SHOWN: "shown" + mt, CLICK_DATA_API: "click" + mt + ".data-api" },
            yt = "active",
            bt = ".active",
            _t = "> li > .active",
            wt = function() {
                function i(e) { this._element = e } var e = i.prototype; return e.show = function() { var n = this; if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && p(this._element).hasClass(yt) || p(this._element).hasClass("disabled"))) { var e, i, t = p(this._element).closest(".nav, .list-group")[0],
                            r = m.getSelectorFromElement(this._element); if (t) { var o = "UL" === t.nodeName || "OL" === t.nodeName ? _t : bt;
                            i = (i = p.makeArray(p(t).find(o)))[i.length - 1] } var s = p.Event(vt.HIDE, { relatedTarget: this._element }),
                            a = p.Event(vt.SHOW, { relatedTarget: i }); if (i && p(i).trigger(s), p(this._element).trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) { r && (e = document.querySelector(r)), this._activate(this._element, t); var l = function() { var e = p.Event(vt.HIDDEN, { relatedTarget: n._element }),
                                    t = p.Event(vt.SHOWN, { relatedTarget: i });
                                p(i).trigger(e), p(n._element).trigger(t) };
                            e ? this._activate(e, e.parentNode, l) : l() } } }, e.dispose = function() { p.removeData(this._element, pt), this._element = null }, e._activate = function(e, t, n) { var i = this,
                        r = (!t || "UL" !== t.nodeName && "OL" !== t.nodeName ? p(t).children(bt) : p(t).find(_t))[0],
                        o = n && r && p(r).hasClass("fade"),
                        s = function() { return i._transitionComplete(e, r, n) }; if (r && o) { var a = m.getTransitionDurationFromElement(r);
                        p(r).removeClass("show").one(m.TRANSITION_END, s).emulateTransitionEnd(a) } else s() }, e._transitionComplete = function(e, t, n) { if (t) { p(t).removeClass(yt); var i = p(t.parentNode).find("> .dropdown-menu .active")[0];
                        i && p(i).removeClass(yt), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !1) } if (p(e).addClass(yt), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), m.reflow(e), e.classList.contains("fade") && e.classList.add("show"), e.parentNode && p(e.parentNode).hasClass("dropdown-menu")) { var r = p(e).closest(".dropdown")[0]; if (r) { var o = [].slice.call(r.querySelectorAll(".dropdown-toggle"));
                            p(o).addClass(yt) }
                        e.setAttribute("aria-expanded", !0) }
                    n && n() }, i._jQueryInterface = function(n) { return this.each(function() { var e = p(this),
                            t = e.data(pt); if (t || (t = new i(this), e.data(pt, t)), "string" == typeof n) { if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                            t[n]() } }) }, s(i, null, [{ key: "VERSION", get: function() { return "4.3.1" } }]), i }();
        p(document).on(vt.CLICK_DATA_API, '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', function(e) { e.preventDefault(), wt._jQueryInterface.call(p(this), "show") }), p.fn.tab = wt._jQueryInterface, p.fn.tab.Constructor = wt, p.fn.tab.noConflict = function() { return p.fn.tab = gt, wt._jQueryInterface }; var Ct = "toast",
            Et = "bs.toast",
            Tt = "." + Et,
            xt = p.fn[Ct],
            St = { CLICK_DISMISS: "click.dismiss" + Tt, HIDE: "hide" + Tt, HIDDEN: "hidden" + Tt, SHOW: "show" + Tt, SHOWN: "shown" + Tt },
            It = "show",
            At = "showing",
            Dt = { animation: "boolean", autohide: "boolean", delay: "number" },
            kt = { animation: !0, autohide: !0, delay: 500 },
            Nt = function() {
                function i(e, t) { this._element = e, this._config = this._getConfig(t), this._timeout = null, this._setListeners() } var e = i.prototype; return e.show = function() { var e = this;
                    p(this._element).trigger(St.SHOW), this._config.animation && this._element.classList.add("fade"); var t = function() { e._element.classList.remove(At), e._element.classList.add(It), p(e._element).trigger(St.SHOWN), e._config.autohide && e.hide() }; if (this._element.classList.remove("hide"), this._element.classList.add(At), this._config.animation) { var n = m.getTransitionDurationFromElement(this._element);
                        p(this._element).one(m.TRANSITION_END, t).emulateTransitionEnd(n) } else t() }, e.hide = function(e) { var t = this;
                    this._element.classList.contains(It) && (p(this._element).trigger(St.HIDE), e ? this._close() : this._timeout = setTimeout(function() { t._close() }, this._config.delay)) }, e.dispose = function() { clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(It) && this._element.classList.remove(It), p(this._element).off(St.CLICK_DISMISS), p.removeData(this._element, Et), this._element = null, this._config = null }, e._getConfig = function(e) { return e = l({}, kt, p(this._element).data(), "object" == typeof e && e ? e : {}), m.typeCheckConfig(Ct, e, this.constructor.DefaultType), e }, e._setListeners = function() { var e = this;
                    p(this._element).on(St.CLICK_DISMISS, '[data-dismiss="toast"]', function() { return e.hide(!0) }) }, e._close = function() { var e = this,
                        t = function() { e._element.classList.add("hide"), p(e._element).trigger(St.HIDDEN) }; if (this._element.classList.remove(It), this._config.animation) { var n = m.getTransitionDurationFromElement(this._element);
                        p(this._element).one(m.TRANSITION_END, t).emulateTransitionEnd(n) } else t() }, i._jQueryInterface = function(n) { return this.each(function() { var e = p(this),
                            t = e.data(Et); if (t || (t = new i(this, "object" == typeof n && n), e.data(Et, t)), "string" == typeof n) { if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                            t[n](this) } }) }, s(i, null, [{ key: "VERSION", get: function() { return "4.3.1" } }, { key: "DefaultType", get: function() { return Dt } }, { key: "Default", get: function() { return kt } }]), i }();
        p.fn[Ct] = Nt._jQueryInterface, p.fn[Ct].Constructor = Nt, p.fn[Ct].noConflict = function() { return p.fn[Ct] = xt, Nt._jQueryInterface },
            function() { if (void 0 === p) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."); var e = p.fn.jquery.split(" ")[0].split("."); if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || 4 <= e[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0") }(), e.Util = m, e.Alert = u, e.Button = C, e.Carousel = H, e.Collapse = Q, e.Dropdown = ue, e.Modal = Ee, e.Popover = et, e.Scrollspy = ht, e.Tab = wt, e.Toast = Nt, e.Tooltip = $e, Object.defineProperty(e, "__esModule", { value: !0 }) }, "object" == typeof exports && "undefined" != typeof module ? t(exports, require("jquery"), require("popper.js")) : "function" == typeof define && define.amd ? define(["exports", "jquery", "popper.js"], t) : t((e = e || self).bootstrap = {}, e.jQuery, e.Popper), n = function(u) { var f, i, d, r, h, t, l = "Close",
            c = "BeforeClose",
            p = "MarkupParse",
            m = "Open",
            g = ".mfp",
            v = "mfp-ready",
            n = "mfp-removing",
            s = "mfp-prevent-close",
            e = function() {},
            a = !!window.jQuery,
            y = u(window),
            b = function(e, t) { f.ev.on("mfp" + e + g, t) },
            _ = function(e, t, n, i) { var r = document.createElement("div"); return r.className = "mfp-" + e, n && (r.innerHTML = n), i ? t && t.appendChild(r) : (r = u(r), t && r.appendTo(t)), r },
            w = function(e, t) { f.ev.triggerHandler("mfp" + e, t), f.st.callbacks && (e = e.charAt(0).toLowerCase() + e.slice(1), f.st.callbacks[e] && f.st.callbacks[e].apply(f, u.isArray(t) ? t : [t])) },
            C = function(e) { return e === t && f.currTemplate.closeBtn || (f.currTemplate.closeBtn = u(f.st.closeMarkup.replace("%title%", f.st.tClose)), t = e), f.currTemplate.closeBtn },
            o = function() { u.magnificPopup.instance || ((f = new e).init(), u.magnificPopup.instance = f) };
        e.prototype = { constructor: e, init: function() { var e = navigator.appVersion;
                f.isLowIE = f.isIE8 = document.all && !document.addEventListener, f.isAndroid = /android/gi.test(e), f.isIOS = /iphone|ipad|ipod/gi.test(e), f.supportsTransition = function() { var e = document.createElement("p").style,
                        t = ["ms", "O", "Moz", "Webkit"]; if (void 0 !== e.transition) return !0; for (; t.length;)
                        if (t.pop() + "Transition" in e) return !0;
                    return !1 }(), f.probablyMobile = f.isAndroid || f.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), d = u(document), f.popupsCache = {} }, open: function(e) { var t; if (!1 === e.isObj) { f.items = e.items.toArray(), f.index = 0; var n, i = e.items; for (t = 0; t < i.length; t++)
                        if ((n = i[t]).parsed && (n = n.el[0]), n === e.el[0]) { f.index = t; break } } else f.items = u.isArray(e.items) ? e.items : [e.items], f.index = e.index || 0; if (!f.isOpen) { f.types = [], h = "", e.mainEl && e.mainEl.length ? f.ev = e.mainEl.eq(0) : f.ev = d, e.key ? (f.popupsCache[e.key] || (f.popupsCache[e.key] = {}), f.currTemplate = f.popupsCache[e.key]) : f.currTemplate = {}, f.st = u.extend(!0, {}, u.magnificPopup.defaults, e), f.fixedContentPos = "auto" === f.st.fixedContentPos ? !f.probablyMobile : f.st.fixedContentPos, f.st.modal && (f.st.closeOnContentClick = !1, f.st.closeOnBgClick = !1, f.st.showCloseBtn = !1, f.st.enableEscapeKey = !1), f.bgOverlay || (f.bgOverlay = _("bg").on("click" + g, function() { f.close() }), f.wrap = _("wrap").attr("tabindex", -1).on("click" + g, function(e) { f._checkIfClose(e.target) && f.close() }), f.container = _("container", f.wrap)), f.contentContainer = _("content"), f.st.preloader && (f.preloader = _("preloader", f.container, f.st.tLoading)); var r = u.magnificPopup.modules; for (t = 0; t < r.length; t++) { var o = r[t];
                        o = o.charAt(0).toUpperCase() + o.slice(1), f["init" + o].call(f) }
                    w("BeforeOpen"), f.st.showCloseBtn && (f.st.closeBtnInside ? (b(p, function(e, t, n, i) { n.close_replaceWith = C(i.type) }), h += " mfp-close-btn-in") : f.wrap.append(C())), f.st.alignTop && (h += " mfp-align-top"), f.fixedContentPos ? f.wrap.css({ overflow: f.st.overflowY, overflowX: "hidden", overflowY: f.st.overflowY }) : f.wrap.css({ top: y.scrollTop(), position: "absolute" }), (!1 === f.st.fixedBgPos || "auto" === f.st.fixedBgPos && !f.fixedContentPos) && f.bgOverlay.css({ height: d.height(), position: "absolute" }), f.st.enableEscapeKey && d.on("keyup" + g, function(e) { 27 === e.keyCode && f.close() }), y.on("resize" + g, function() { f.updateSize() }), f.st.closeOnContentClick || (h += " mfp-auto-cursor"), h && f.wrap.addClass(h); var s = f.wH = y.height(),
                        a = {}; if (f.fixedContentPos && f._hasScrollBar(s)) { var l = f._getScrollbarSize();
                        l && (a.marginRight = l) }
                    f.fixedContentPos && (f.isIE7 ? u("body, html").css("overflow", "hidden") : a.overflow = "hidden"); var c = f.st.mainClass; return f.isIE7 && (c += " mfp-ie7"), c && f._addClassToMFP(c), f.updateItemHTML(), w("BuildControls"), u("html").css(a), f.bgOverlay.add(f.wrap).prependTo(f.st.prependTo || u(document.body)), f._lastFocusedEl = document.activeElement, setTimeout(function() { f.content ? (f._addClassToMFP(v), f._setFocus()) : f.bgOverlay.addClass(v), d.on("focusin" + g, f._onFocusIn) }, 16), f.isOpen = !0, f.updateSize(s), w(m), e }
                f.updateItemHTML() }, close: function() { f.isOpen && (w(c), f.isOpen = !1, f.st.removalDelay && !f.isLowIE && f.supportsTransition ? (f._addClassToMFP(n), setTimeout(function() { f._close() }, f.st.removalDelay)) : f._close()) }, _close: function() { w(l); var e = n + " " + v + " "; if (f.bgOverlay.detach(), f.wrap.detach(), f.container.empty(), f.st.mainClass && (e += f.st.mainClass + " "), f._removeClassFromMFP(e), f.fixedContentPos) { var t = { marginRight: "" };
                    f.isIE7 ? u("body, html").css("overflow", "") : t.overflow = "", u("html").css(t) }
                d.off("keyup.mfp focusin" + g), f.ev.off(g), f.wrap.attr("class", "mfp-wrap").removeAttr("style"), f.bgOverlay.attr("class", "mfp-bg"), f.container.attr("class", "mfp-container"), !f.st.showCloseBtn || f.st.closeBtnInside && !0 !== f.currTemplate[f.currItem.type] || f.currTemplate.closeBtn && f.currTemplate.closeBtn.detach(), f.st.autoFocusLast && f._lastFocusedEl && u(f._lastFocusedEl).focus(), f.currItem = null, f.content = null, f.currTemplate = null, f.prevHeight = 0, w("AfterClose") }, updateSize: function(e) { if (f.isIOS) { var t = document.documentElement.clientWidth / window.innerWidth,
                        n = window.innerHeight * t;
                    f.wrap.css("height", n), f.wH = n } else f.wH = e || y.height();
                f.fixedContentPos || f.wrap.css("height", f.wH), w("Resize") }, updateItemHTML: function() { var e = f.items[f.index];
                f.contentContainer.detach(), f.content && f.content.detach(), e.parsed || (e = f.parseEl(f.index)); var t = e.type; if (w("BeforeChange", [f.currItem ? f.currItem.type : "", t]), f.currItem = e, !f.currTemplate[t]) { var n = !!f.st[t] && f.st[t].markup;
                    w("FirstMarkupParse", n), f.currTemplate[t] = !n || u(n) }
                r && r !== e.type && f.container.removeClass("mfp-" + r + "-holder"); var i = f["get" + t.charAt(0).toUpperCase() + t.slice(1)](e, f.currTemplate[t]);
                f.appendContent(i, t), e.preloaded = !0, w("Change", e), r = e.type, f.container.prepend(f.contentContainer), w("AfterChange") }, appendContent: function(e, t) {
                (f.content = e) ? f.st.showCloseBtn && f.st.closeBtnInside && !0 === f.currTemplate[t] ? f.content.find(".mfp-close").length || f.content.append(C()) : f.content = e: f.content = "", w("BeforeAppend"), f.container.addClass("mfp-" + t + "-holder"), f.contentContainer.append(f.content) }, parseEl: function(e) { var t, n = f.items[e]; if ((n = n.tagName ? { el: u(n) } : (t = n.type, { data: n, src: n.src })).el) { for (var i = f.types, r = 0; r < i.length; r++)
                        if (n.el.hasClass("mfp-" + i[r])) { t = i[r]; break }
                    n.src = n.el.attr("data-mfp-src"), n.src || (n.src = n.el.attr("href")) } return n.type = t || f.st.type || "inline", n.index = e, n.parsed = !0, f.items[e] = n, w("ElementParse", n), f.items[e] }, addGroup: function(t, n) { var e = function(e) { e.mfpEl = this, f._openClick(e, t, n) };
                n || (n = {}); var i = "click.magnificPopup";
                n.mainEl = t, n.items ? (n.isObj = !0, t.off(i).on(i, e)) : (n.isObj = !1, n.delegate ? t.off(i).on(i, n.delegate, e) : (n.items = t).off(i).on(i, e)) }, _openClick: function(e, t, n) { if ((void 0 !== n.midClick ? n.midClick : u.magnificPopup.defaults.midClick) || !(2 === e.which || e.ctrlKey || e.metaKey || e.altKey || e.shiftKey)) { var i = void 0 !== n.disableOn ? n.disableOn : u.magnificPopup.defaults.disableOn; if (i)
                        if (u.isFunction(i)) { if (!i.call(f)) return !0 } else if (y.width() < i) return !0;
                    e.type && (e.preventDefault(), f.isOpen && e.stopPropagation()), n.el = u(e.mfpEl), n.delegate && (n.items = t.find(n.delegate)), f.open(n) } }, updateStatus: function(e, t) { if (f.preloader) { i !== e && f.container.removeClass("mfp-s-" + i), t || "loading" !== e || (t = f.st.tLoading); var n = { status: e, text: t };
                    w("UpdateStatus", n), e = n.status, t = n.text, f.preloader.html(t), f.preloader.find("a").on("click", function(e) { e.stopImmediatePropagation() }), f.container.addClass("mfp-s-" + e), i = e } }, _checkIfClose: function(e) { if (!u(e).hasClass(s)) { var t = f.st.closeOnContentClick,
                        n = f.st.closeOnBgClick; if (t && n) return !0; if (!f.content || u(e).hasClass("mfp-close") || f.preloader && e === f.preloader[0]) return !0; if (e === f.content[0] || u.contains(f.content[0], e)) { if (t) return !0 } else if (n && u.contains(document, e)) return !0; return !1 } }, _addClassToMFP: function(e) { f.bgOverlay.addClass(e), f.wrap.addClass(e) }, _removeClassFromMFP: function(e) { this.bgOverlay.removeClass(e), f.wrap.removeClass(e) }, _hasScrollBar: function(e) { return (f.isIE7 ? d.height() : document.body.scrollHeight) > (e || y.height()) }, _setFocus: function() {
                (f.st.focus ? f.content.find(f.st.focus).eq(0) : f.wrap).focus() }, _onFocusIn: function(e) { return e.target === f.wrap[0] || u.contains(f.wrap[0], e.target) ? void 0 : (f._setFocus(), !1) }, _parseMarkup: function(r, e, t) { var o;
                t.data && (e = u.extend(t.data, e)), w(p, [r, e, t]), u.each(e, function(e, t) { if (void 0 === t || !1 === t) return !0; if (1 < (o = e.split("_")).length) { var n = r.find(g + "-" + o[0]); if (0 < n.length) { var i = o[1]; "replaceWith" === i ? n[0] !== t[0] && n.replaceWith(t) : "img" === i ? n.is("img") ? n.attr("src", t) : n.replaceWith(u("<img>").attr("src", t).attr("class", n.attr("class"))) : n.attr(o[1], t) } } else r.find(g + "-" + e).html(t) }) }, _getScrollbarSize: function() { if (void 0 === f.scrollbarSize) { var e = document.createElement("div");
                    e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(e), f.scrollbarSize = e.offsetWidth - e.clientWidth, document.body.removeChild(e) } return f.scrollbarSize } }, u.magnificPopup = { instance: null, proto: e.prototype, modules: [], open: function(e, t) { return o(), (e = e ? u.extend(!0, {}, e) : {}).isObj = !0, e.index = t || 0, this.instance.open(e) }, close: function() { return u.magnificPopup.instance && u.magnificPopup.instance.close() }, registerModule: function(e, t) { t.options && (u.magnificPopup.defaults[e] = t.options), u.extend(this.proto, t.proto), this.modules.push(e) }, defaults: { disableOn: 0, key: null, midClick: !1, mainClass: "", preloader: !0, focus: "", closeOnContentClick: !1, closeOnBgClick: !0, closeBtnInside: !0, showCloseBtn: !0, enableEscapeKey: !0, modal: !1, alignTop: !1, removalDelay: 0, prependTo: null, fixedContentPos: "auto", fixedBgPos: "auto", overflowY: "auto", closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>', tClose: "Close (Esc)", tLoading: "Loading...", autoFocusLast: !0 } }, u.fn.magnificPopup = function(e) { o(); var t = u(this); if ("string" == typeof e)
                if ("open" === e) { var n, i = a ? t.data("magnificPopup") : t[0].magnificPopup,
                        r = parseInt(arguments[1], 10) || 0;
                    n = i.items ? i.items[r] : (n = t, i.delegate && (n = n.find(i.delegate)), n.eq(r)), f._openClick({ mfpEl: n }, t, i) } else f.isOpen && f[e].apply(f, Array.prototype.slice.call(arguments, 1));
            else e = u.extend(!0, {}, e), a ? t.data("magnificPopup", e) : t[0].magnificPopup = e, f.addGroup(t, e); return t }; var E, T, x, S = "inline",
            I = function() { x && (T.after(x.addClass(E)).detach(), x = null) };
        u.magnificPopup.registerModule(S, { options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" }, proto: { initInline: function() { f.types.push(S), b(l + "." + S, function() { I() }) }, getInline: function(e, t) { if (I(), e.src) { var n = f.st.inline,
                            i = u(e.src); if (i.length) { var r = i[0].parentNode;
                            r && r.tagName && (T || (E = n.hiddenClass, T = _(E), E = "mfp-" + E), x = i.after(T).detach().removeClass(E)), f.updateStatus("ready") } else f.updateStatus("error", n.tNotFound), i = u("<div>"); return e.inlineElement = i } return f.updateStatus("ready"), f._parseMarkup(t, {}, e), t } } }); var A, D = "ajax",
            k = function() { A && u(document.body).removeClass(A) },
            N = function() { k(), f.req && f.req.abort() };
        u.magnificPopup.registerModule(D, { options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' }, proto: { initAjax: function() { f.types.push(D), A = f.st.ajax.cursor, b(l + "." + D, N), b("BeforeChange." + D, N) }, getAjax: function(r) { A && u(document.body).addClass(A), f.updateStatus("loading"); var e = u.extend({ url: r.src, success: function(e, t, n) { var i = { data: e, xhr: n };
                            w("ParseAjax", i), f.appendContent(u(i.data), D), r.finished = !0, k(), f._setFocus(), setTimeout(function() { f.wrap.addClass(v) }, 16), f.updateStatus("ready"), w("AjaxContentAdded") }, error: function() { k(), r.finished = r.loadError = !0, f.updateStatus("error", f.st.ajax.tError.replace("%url%", r.src)) } }, f.st.ajax.settings); return f.req = u.ajax(e), "" } } }); var O;
        u.magnificPopup.registerModule("image", { options: { markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>', cursor: "mfp-zoom-out-cur", titleSrc: "title", verticalFit: !0, tError: '<a href="%url%">The image</a> could not be loaded.' }, proto: { initImage: function() { var e = f.st.image,
                        t = ".image";
                    f.types.push("image"), b(m + t, function() { "image" === f.currItem.type && e.cursor && u(document.body).addClass(e.cursor) }), b(l + t, function() { e.cursor && u(document.body).removeClass(e.cursor), y.off("resize" + g) }), b("Resize" + t, f.resizeImage), f.isLowIE && b("AfterChange", f.resizeImage) }, resizeImage: function() { var e = f.currItem; if (e && e.img && f.st.image.verticalFit) { var t = 0;
                        f.isLowIE && (t = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)), e.img.css("max-height", f.wH - t) } }, _onImageHasSize: function(e) { e.img && (e.hasSize = !0, O && clearInterval(O), e.isCheckingImgSize = !1, w("ImageHasSize", e), e.imgHidden && (f.content && f.content.removeClass("mfp-loading"), e.imgHidden = !1)) }, findImageSize: function(t) { var n = 0,
                        i = t.img[0],
                        r = function(e) { O && clearInterval(O), O = setInterval(function() { return 0 < i.naturalWidth ? void f._onImageHasSize(t) : (200 < n && clearInterval(O), void(3 === ++n ? r(10) : 40 === n ? r(50) : 100 === n && r(500))) }, e) };
                    r(1) }, getImage: function(e, t) { var n = 0,
                        i = function() { e && (e.img[0].complete ? (e.img.off(".mfploader"), e === f.currItem && (f._onImageHasSize(e), f.updateStatus("ready")), e.hasSize = !0, e.loaded = !0, w("ImageLoadComplete")) : ++n < 200 ? setTimeout(i, 100) : r()) },
                        r = function() { e && (e.img.off(".mfploader"), e === f.currItem && (f._onImageHasSize(e), f.updateStatus("error", o.tError.replace("%url%", e.src))), e.hasSize = !0, e.loaded = !0, e.loadError = !0) },
                        o = f.st.image,
                        s = t.find(".mfp-img"); if (s.length) { var a = document.createElement("img");
                        a.className = "mfp-img", e.el && e.el.find("img").length && (a.alt = e.el.find("img").attr("alt")), e.img = u(a).on("load.mfploader", i).on("error.mfploader", r), a.src = e.src, s.is("img") && (e.img = e.img.clone()), 0 < (a = e.img[0]).naturalWidth ? e.hasSize = !0 : a.width || (e.hasSize = !1) } return f._parseMarkup(t, { title: function(e) { if (e.data && void 0 !== e.data.title) return e.data.title; var t = f.st.image.titleSrc; if (t) { if (u.isFunction(t)) return t.call(f, e); if (e.el) return e.el.attr(t) || "" } return "" }(e), img_replaceWith: e.img }, e), f.resizeImage(), e.hasSize ? (O && clearInterval(O), e.loadError ? (t.addClass("mfp-loading"), f.updateStatus("error", o.tError.replace("%url%", e.src))) : (t.removeClass("mfp-loading"), f.updateStatus("ready"))) : (f.updateStatus("loading"), e.loading = !0, e.hasSize || (e.imgHidden = !0, t.addClass("mfp-loading"), f.findImageSize(e))), t } } }); var L;
        u.magnificPopup.registerModule("zoom", { options: { enabled: !1, easing: "ease-in-out", duration: 300, opener: function(e) { return e.is("img") ? e : e.find("img") } }, proto: { initZoom: function() { var e, o = f.st.zoom,
                        t = ".zoom"; if (o.enabled && f.supportsTransition) { var n, i, r = o.duration,
                            s = function(e) { var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                    n = "all " + o.duration / 1e3 + "s " + o.easing,
                                    i = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                    r = "transition"; return i["-webkit-" + r] = i["-moz-" + r] = i["-o-" + r] = i[r] = n, t.css(i), t },
                            a = function() { f.content.css("visibility", "visible") };
                        b("BuildControls" + t, function() { if (f._allowZoom()) { if (clearTimeout(n), f.content.css("visibility", "hidden"), !(e = f._getItemToZoom())) return void a();
                                (i = s(e)).css(f._getOffset()), f.wrap.append(i), n = setTimeout(function() { i.css(f._getOffset(!0)), n = setTimeout(function() { a(), setTimeout(function() { i.remove(), e = i = null, w("ZoomAnimationEnded") }, 16) }, r) }, 16) } }), b(c + t, function() { if (f._allowZoom()) { if (clearTimeout(n), f.st.removalDelay = r, !e) { if (!(e = f._getItemToZoom())) return;
                                    i = s(e) }
                                i.css(f._getOffset(!0)), f.wrap.append(i), f.content.css("visibility", "hidden"), setTimeout(function() { i.css(f._getOffset()) }, 16) } }), b(l + t, function() { f._allowZoom() && (a(), i && i.remove(), e = null) }) } }, _allowZoom: function() { return "image" === f.currItem.type }, _getItemToZoom: function() { return !!f.currItem.hasSize && f.currItem.img }, _getOffset: function(e) { var t, n = (t = e ? f.currItem.img : f.st.zoom.opener(f.currItem.el || f.currItem)).offset(),
                        i = parseInt(t.css("padding-top"), 10),
                        r = parseInt(t.css("padding-bottom"), 10);
                    n.top -= u(window).scrollTop() - i; var o = { width: t.width(), height: (a ? t.innerHeight() : t[0].offsetHeight) - r - i }; return void 0 === L && (L = void 0 !== document.createElement("p").style.MozTransform), L ? o["-moz-transform"] = o.transform = "translate(" + n.left + "px," + n.top + "px)" : (o.left = n.left, o.top = n.top), o } } }); var j = "iframe",
            P = function(e) { if (f.currTemplate[j]) { var t = f.currTemplate[j].find("iframe");
                    t.length && (e || (t[0].src = "//about:blank"), f.isIE8 && t.css("display", e ? "block" : "none")) } };
        u.magnificPopup.registerModule(j, { options: { markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>', srcAction: "iframe_src", patterns: { youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" }, vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" }, gmaps: { index: "//maps.google.", src: "%id%&output=embed" } } }, proto: { initIframe: function() { f.types.push(j), b("BeforeChange", function(e, t, n) { t !== n && (t === j ? P() : n === j && P(!0)) }), b(l + "." + j, function() { P() }) }, getIframe: function(e, t) { var n = e.src,
                        i = f.st.iframe;
                    u.each(i.patterns, function() { return -1 < n.indexOf(this.index) ? (this.id && (n = "string" == typeof this.id ? n.substr(n.lastIndexOf(this.id) + this.id.length, n.length) : this.id.call(this, n)), n = this.src.replace("%id%", n), !1) : void 0 }); var r = {}; return i.srcAction && (r[i.srcAction] = n), f._parseMarkup(t, r, e), f.updateStatus("ready"), t } } }); var H = function(e) { var t = f.items.length; return t - 1 < e ? e - t : e < 0 ? t + e : e },
            R = function(e, t, n) { return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, n) };
        u.magnificPopup.registerModule("gallery", { options: { enabled: !1, arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', preload: [0, 2], navigateByImgClick: !0, arrows: !0, tPrev: "Previous (Left arrow key)", tNext: "Next (Right arrow key)", tCounter: "%curr% of %total%" }, proto: { initGallery: function() { var o = f.st.gallery,
                        e = ".mfp-gallery"; return f.direction = !0, !(!o || !o.enabled) && (h += " mfp-gallery", b(m + e, function() { o.navigateByImgClick && f.wrap.on("click" + e, ".mfp-img", function() { return 1 < f.items.length ? (f.next(), !1) : void 0 }), d.on("keydown" + e, function(e) { 37 === e.keyCode ? f.prev() : 39 === e.keyCode && f.next() }) }), b("UpdateStatus" + e, function(e, t) { t.text && (t.text = R(t.text, f.currItem.index, f.items.length)) }), b(p + e, function(e, t, n, i) { var r = f.items.length;
                        n.counter = 1 < r ? R(o.tCounter, i.index, r) : "" }), b("BuildControls" + e, function() { if (1 < f.items.length && o.arrows && !f.arrowLeft) { var e = o.arrowMarkup,
                                t = f.arrowLeft = u(e.replace(/%title%/gi, o.tPrev).replace(/%dir%/gi, "left")).addClass(s),
                                n = f.arrowRight = u(e.replace(/%title%/gi, o.tNext).replace(/%dir%/gi, "right")).addClass(s);
                            t.click(function() { f.prev() }), n.click(function() { f.next() }), f.container.append(t.add(n)) } }), b("Change" + e, function() { f._preloadTimeout && clearTimeout(f._preloadTimeout), f._preloadTimeout = setTimeout(function() { f.preloadNearbyImages(), f._preloadTimeout = null }, 16) }), void b(l + e, function() { d.off(e), f.wrap.off("click" + e), f.arrowRight = f.arrowLeft = null })) }, next: function() { f.direction = !0, f.index = H(f.index + 1), f.updateItemHTML() }, prev: function() { f.direction = !1, f.index = H(f.index - 1), f.updateItemHTML() }, goTo: function(e) { f.direction = e >= f.index, f.index = e, f.updateItemHTML() }, preloadNearbyImages: function() { var e, t = f.st.gallery.preload,
                        n = Math.min(t[0], f.items.length),
                        i = Math.min(t[1], f.items.length); for (e = 1; e <= (f.direction ? i : n); e++) f._preloadItem(f.index + e); for (e = 1; e <= (f.direction ? n : i); e++) f._preloadItem(f.index - e) }, _preloadItem: function(e) { if (e = H(e), !f.items[e].preloaded) { var t = f.items[e];
                        t.parsed || (t = f.parseEl(e)), w("LazyLoad", t), "image" === t.type && (t.img = u('<img class="mfp-img" />').on("load.mfploader", function() { t.hasSize = !0 }).on("error.mfploader", function() { t.hasSize = !0, t.loadError = !0, w("LazyLoadError", t) }).attr("src", t.src)), t.preloaded = !0 } } } }); var W = "retina";
        u.magnificPopup.registerModule(W, { options: { replaceSrc: function(e) { return e.src.replace(/\.\w+$/, function(e) { return "@2x" + e }) }, ratio: 1 }, proto: { initRetina: function() { if (1 < window.devicePixelRatio) { var n = f.st.retina,
                            i = n.ratio;
                        1 < (i = isNaN(i) ? i() : i) && (b("ImageHasSize." + W, function(e, t) { t.img.css({ "max-width": t.img[0].naturalWidth / i, width: "100%" }) }), b("ElementParse." + W, function(e, t) { t.src = n.replaceSrc(t, i) })) } } } }), o() }, "function" == typeof define && define.amd ? define(["jquery"], n) : n("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto),
    function o(s, a, l) {
        function c(n, e) { if (!a[n]) { if (!s[n]) { var t = "function" == typeof require && require; if (!e && t) return t(n, !0); if (u) return u(n, !0); var i = new Error("Cannot find module '" + n + "'"); throw i.code = "MODULE_NOT_FOUND", i } var r = a[n] = { exports: {} };
                s[n][0].call(r.exports, function(e) { var t = s[n][1][e]; return c(t || e) }, r, r.exports, o, s, a, l) } return a[n].exports } for (var u = "function" == typeof require && require, e = 0; e < l.length; e++) c(l[e]); return c }({ 1: [function(e, t, n) { "use strict"; var r = e("../main"),
                o = e("../plugin/instances");

            function i(i) { i.fn.perfectScrollbar = function(n) { return this.each(function() { if ("object" == typeof n || void 0 === n) { var e = n;
                            o.get(this) || r.initialize(this, e) } else { var t = n; "update" === t ? r.update(this) : "destroy" === t && r.destroy(this) } return i(this) }) } } if ("function" == typeof define && define.amd) define(["jquery"], i);
            else { var s = window.jQuery ? window.jQuery : window.$;
                void 0 !== s && i(s) }
            t.exports = i }, { "../main": 7, "../plugin/instances": 18 }], 2: [function(e, t, n) { "use strict";
            n.add = function(e, t) { var n, i, r;
                e.classList ? e.classList.add(t) : (i = t, (r = (n = e).className.split(" ")).indexOf(i) < 0 && r.push(i), n.className = r.join(" ")) }, n.remove = function(e, t) { var n, i, r, o;
                e.classList ? e.classList.remove(t) : (i = t, r = (n = e).className.split(" "), 0 <= (o = r.indexOf(i)) && r.splice(o, 1), n.className = r.join(" ")) }, n.list = function(e) { return e.classList ? Array.prototype.slice.apply(e.classList) : e.className.split(" ") } }, {}], 3: [function(e, t, n) { "use strict"; var i = {};
            i.e = function(e, t) { var n = document.createElement(e); return n.className = t, n }, i.appendTo = function(e, t) { return t.appendChild(e), e }, i.css = function(e, t, n) { return "object" == typeof t ? function(e, t) { for (var n in t) { var i = t[n]; "number" == typeof i && (i = i.toString() + "px"), e.style[n] = i } return e }(e, t) : void 0 === n ? (s = e, a = t, window.getComputedStyle(s)[a]) : (i = e, r = t, "number" == typeof(o = n) && (o = o.toString() + "px"), i.style[r] = o, i); var i, r, o, s, a }, i.matches = function(e, t) { return void 0 !== e.matches ? e.matches(t) : void 0 !== e.matchesSelector ? e.matchesSelector(t) : void 0 !== e.webkitMatchesSelector ? e.webkitMatchesSelector(t) : void 0 !== e.mozMatchesSelector ? e.mozMatchesSelector(t) : void 0 !== e.msMatchesSelector ? e.msMatchesSelector(t) : void 0 }, i.remove = function(e) { void 0 !== e.remove ? e.remove() : e.parentNode && e.parentNode.removeChild(e) }, i.queryChildren = function(e, t) { return Array.prototype.filter.call(e.childNodes, function(e) { return i.matches(e, t) }) }, t.exports = i }, {}], 4: [function(e, t, n) { "use strict"; var i = function(e) { this.element = e, this.events = {} };
            i.prototype.bind = function(e, t) { void 0 === this.events[e] && (this.events[e] = []), this.events[e].push(t), this.element.addEventListener(e, t, !1) }, i.prototype.unbind = function(t, n) { var i = void 0 !== n;
                this.events[t] = this.events[t].filter(function(e) { return !(!i || e === n) || (this.element.removeEventListener(t, e, !1), !1) }, this) }, i.prototype.unbindAll = function() { for (var e in this.events) this.unbind(e) }; var r = function() { this.eventElements = [] };
            r.prototype.eventElement = function(t) { var e = this.eventElements.filter(function(e) { return e.element === t })[0]; return void 0 === e && (e = new i(t), this.eventElements.push(e)), e }, r.prototype.bind = function(e, t, n) { this.eventElement(e).bind(t, n) }, r.prototype.unbind = function(e, t, n) { this.eventElement(e).unbind(t, n) }, r.prototype.unbindAll = function() { for (var e = 0; e < this.eventElements.length; e++) this.eventElements[e].unbindAll() }, r.prototype.once = function(e, t, n) { var i = this.eventElement(e),
                    r = function(e) { i.unbind(t, r), n(e) };
                i.bind(t, r) }, t.exports = r }, {}], 5: [function(e, t, n) { "use strict";
            t.exports = function() {
                function e() { return Math.floor(65536 * (1 + Math.random())).toString(16).substring(1) } return function() { return e() + e() + "-" + e() + "-" + e() + "-" + e() + "-" + e() + e() + e() } }() }, {}], 6: [function(e, t, n) { "use strict"; var r = e("./class"),
                i = e("./dom");
            n.toInt = function(e) { return parseInt(e, 10) || 0 }, n.clone = function(e) { if (null === e) return null; if ("object" != typeof e) return e; var t = {}; for (var n in e) t[n] = this.clone(e[n]); return t }, n.extend = function(e, t) { var n = this.clone(e); for (var i in t) n[i] = this.clone(t[i]); return n }, n.isEditable = function(e) { return i.matches(e, "input,[contenteditable]") || i.matches(e, "select,[contenteditable]") || i.matches(e, "textarea,[contenteditable]") || i.matches(e, "button,[contenteditable]") }, n.removePsClasses = function(e) { for (var t = r.list(e), n = 0; n < t.length; n++) { var i = t[n];
                    0 === i.indexOf("ps-") && r.remove(e, i) } }, n.outerWidth = function(e) { return this.toInt(i.css(e, "width")) + this.toInt(i.css(e, "paddingLeft")) + this.toInt(i.css(e, "paddingRight")) + this.toInt(i.css(e, "borderLeftWidth")) + this.toInt(i.css(e, "borderRightWidth")) }, n.startScrolling = function(e, t) { r.add(e, "ps-in-scrolling"), void 0 !== t ? r.add(e, "ps-" + t) : (r.add(e, "ps-x"), r.add(e, "ps-y")) }, n.stopScrolling = function(e, t) { r.remove(e, "ps-in-scrolling"), void 0 !== t ? r.remove(e, "ps-" + t) : (r.remove(e, "ps-x"), r.remove(e, "ps-y")) }, n.env = { isWebKit: "WebkitAppearance" in document.documentElement.style, supportsTouch: "ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch, supportsIePointer: null !== window.navigator.msMaxTouchPoints } }, { "./class": 2, "./dom": 3 }], 7: [function(e, t, n) { "use strict"; var i = e("./plugin/destroy"),
                r = e("./plugin/initialize"),
                o = e("./plugin/update");
            t.exports = { initialize: r, update: o, destroy: i } }, { "./plugin/destroy": 9, "./plugin/initialize": 17, "./plugin/update": 21 }], 8: [function(e, t, n) { "use strict";
            t.exports = { maxScrollbarLength: null, minScrollbarLength: null, scrollXMarginOffset: 0, scrollYMarginOffset: 0, stopPropagationOnClick: !0, suppressScrollX: !1, suppressScrollY: !1, swipePropagation: !0, useBothWheelAxes: !1, useKeyboard: !0, useSelectionScroll: !1, wheelPropagation: !1, wheelSpeed: 1, theme: "default" } }, {}], 9: [function(e, t, n) { "use strict"; var i = e("../lib/dom"),
                r = e("../lib/helper"),
                o = e("./instances");
            t.exports = function(e) { var t = o.get(e);
                t && (t.event.unbindAll(), i.remove(t.scrollbarX), i.remove(t.scrollbarY), i.remove(t.scrollbarXRail), i.remove(t.scrollbarYRail), r.removePsClasses(e), o.remove(e)) } }, { "../lib/dom": 3, "../lib/helper": 6, "./instances": 18 }], 10: [function(e, t, n) { "use strict"; var s = e("../../lib/helper"),
                i = e("../instances"),
                a = e("../update-geometry"),
                l = e("../update-scroll");
            t.exports = function(e) {! function(i, r) {
                    function o(e) { return e.getBoundingClientRect() } var e = window.Event.prototype.stopPropagation.bind;
                    r.settings.stopPropagationOnClick && r.event.bind(r.scrollbarY, "click", e), r.event.bind(r.scrollbarYRail, "click", function(e) { var t = s.toInt(r.scrollbarYHeight / 2),
                            n = r.railYRatio * (e.pageY - window.pageYOffset - o(r.scrollbarYRail).top - t) / (r.railYRatio * (r.railYHeight - r.scrollbarYHeight));
                        n < 0 ? n = 0 : 1 < n && (n = 1), l(i, "top", (r.contentHeight - r.containerHeight) * n), a(i), e.stopPropagation() }), r.settings.stopPropagationOnClick && r.event.bind(r.scrollbarX, "click", e), r.event.bind(r.scrollbarXRail, "click", function(e) { var t = s.toInt(r.scrollbarXWidth / 2),
                            n = r.railXRatio * (e.pageX - window.pageXOffset - o(r.scrollbarXRail).left - t) / (r.railXRatio * (r.railXWidth - r.scrollbarXWidth));
                        n < 0 ? n = 0 : 1 < n && (n = 1), l(i, "left", (r.contentWidth - r.containerWidth) * n - r.negativeScrollAdjustment), a(i), e.stopPropagation() }) }(e, i.get(e)) } }, { "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 11: [function(e, t, n) { "use strict"; var a = e("../../lib/dom"),
                l = e("../../lib/helper"),
                i = e("../instances"),
                c = e("../update-geometry"),
                u = e("../update-scroll");

            function r(r, o) { var s = null,
                    t = null; var n = function(e) {! function(e) { var t = s + e * o.railXRatio,
                                n = Math.max(0, o.scrollbarXRail.getBoundingClientRect().left) + o.railXRatio * (o.railXWidth - o.scrollbarXWidth);
                            o.scrollbarXLeft = t < 0 ? 0 : n < t ? n : t; var i = l.toInt(o.scrollbarXLeft * (o.contentWidth - o.containerWidth) / (o.containerWidth - o.railXRatio * o.scrollbarXWidth)) - o.negativeScrollAdjustment;
                            u(r, "left", i) }(e.pageX - t), c(r), e.stopPropagation(), e.preventDefault() },
                    i = function() { l.stopScrolling(r, "x"), o.event.unbind(o.ownerDocument, "mousemove", n) };
                o.event.bind(o.scrollbarX, "mousedown", function(e) { t = e.pageX, s = l.toInt(a.css(o.scrollbarX, "left")) * o.railXRatio, l.startScrolling(r, "x"), o.event.bind(o.ownerDocument, "mousemove", n), o.event.once(o.ownerDocument, "mouseup", i), e.stopPropagation(), e.preventDefault() }) }

            function o(r, o) { var s = null,
                    t = null; var n = function(e) {! function(e) { var t = s + e * o.railYRatio,
                                n = Math.max(0, o.scrollbarYRail.getBoundingClientRect().top) + o.railYRatio * (o.railYHeight - o.scrollbarYHeight);
                            o.scrollbarYTop = t < 0 ? 0 : n < t ? n : t; var i = l.toInt(o.scrollbarYTop * (o.contentHeight - o.containerHeight) / (o.containerHeight - o.railYRatio * o.scrollbarYHeight));
                            u(r, "top", i) }(e.pageY - t), c(r), e.stopPropagation(), e.preventDefault() },
                    i = function() { l.stopScrolling(r, "y"), o.event.unbind(o.ownerDocument, "mousemove", n) };
                o.event.bind(o.scrollbarY, "mousedown", function(e) { t = e.pageY, s = l.toInt(a.css(o.scrollbarY, "top")) * o.railYRatio, l.startScrolling(r, "y"), o.event.bind(o.ownerDocument, "mousemove", n), o.event.once(o.ownerDocument, "mouseup", i), e.stopPropagation(), e.preventDefault() }) }
            t.exports = function(e) { var t = i.get(e);
                r(e, t), o(e, t) } }, { "../../lib/dom": 3, "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 12: [function(e, t, n) { "use strict"; var l = e("../../lib/helper"),
                c = e("../../lib/dom"),
                i = e("../instances"),
                u = e("../update-geometry"),
                f = e("../update-scroll");

            function r(o, s) { var a = !1;
                s.event.bind(o, "mouseenter", function() { a = !0 }), s.event.bind(o, "mouseleave", function() { a = !1 });
                s.event.bind(s.ownerDocument, "keydown", function(e) { if (!e.isDefaultPrevented || !e.isDefaultPrevented()) { var t = c.matches(s.scrollbarX, ":focus") || c.matches(s.scrollbarY, ":focus"); if (a || t) { var n = document.activeElement ? document.activeElement : s.ownerDocument.activeElement; if (n) { for (; n.shadowRoot;) n = n.shadowRoot.activeElement; if (l.isEditable(n)) return } var i = 0,
                                r = 0; switch (e.which) {
                                case 37:
                                    i = -30; break;
                                case 38:
                                    r = 30; break;
                                case 39:
                                    i = 30; break;
                                case 40:
                                    r = -30; break;
                                case 33:
                                    r = 90; break;
                                case 32:
                                    r = e.shiftKey ? 90 : -90; break;
                                case 34:
                                    r = -90; break;
                                case 35:
                                    r = e.ctrlKey ? -s.contentHeight : -s.containerHeight; break;
                                case 36:
                                    r = e.ctrlKey ? o.scrollTop : s.containerHeight; break;
                                default:
                                    return }
                            f(o, "top", o.scrollTop - r), f(o, "left", o.scrollLeft + i), u(o),
                                function(e, t) { var n = o.scrollTop; if (0 === e) { if (!s.scrollbarYActive) return !1; if (0 === n && 0 < t || n >= s.contentHeight - s.containerHeight && t < 0) return !s.settings.wheelPropagation } var i = o.scrollLeft; if (0 === t) { if (!s.scrollbarXActive) return !1; if (0 === i && e < 0 || i >= s.contentWidth - s.containerWidth && 0 < e) return !s.settings.wheelPropagation } return !0 }(i, r) && e.preventDefault() } } }) }
            t.exports = function(e) { r(e, i.get(e)) } }, { "../../lib/dom": 3, "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 13: [function(e, t, n) { "use strict"; var i = e("../instances"),
                u = e("../update-geometry"),
                f = e("../update-scroll");

            function r(a, l) { var c = !1;

                function e(e) { var t, n, i, r = (n = (t = e).deltaX, i = -1 * t.deltaY, void 0 !== n && void 0 !== i || (n = -1 * t.wheelDeltaX / 6, i = t.wheelDeltaY / 6), t.deltaMode && 1 === t.deltaMode && (n *= 10, i *= 10), n != n && i != i && (n = 0, i = t.wheelDelta), [n, i]),
                        o = r[0],
                        s = r[1];
                    (function(e, t) { var n = a.querySelector("textarea:hover"); if (n) { var i = n.scrollHeight - n.clientHeight; if (0 < i && !(0 === n.scrollTop && 0 < t || n.scrollTop === i && t < 0)) return !0; var r = n.scrollLeft - n.clientWidth; if (0 < r && !(0 === n.scrollLeft && e < 0 || n.scrollLeft === r && 0 < e)) return !0 } return !1 })(o, s) || (c = !1, l.settings.useBothWheelAxes ? l.scrollbarYActive && !l.scrollbarXActive ? (f(a, "top", s ? a.scrollTop - s * l.settings.wheelSpeed : a.scrollTop + o * l.settings.wheelSpeed), c = !0) : l.scrollbarXActive && !l.scrollbarYActive && (f(a, "left", o ? a.scrollLeft + o * l.settings.wheelSpeed : a.scrollLeft - s * l.settings.wheelSpeed), c = !0) : (f(a, "top", a.scrollTop - s * l.settings.wheelSpeed), f(a, "left", a.scrollLeft + o * l.settings.wheelSpeed)), u(a), (c = c || function(e, t) { var n = a.scrollTop; if (0 === e) { if (!l.scrollbarYActive) return !1; if (0 === n && 0 < t || n >= l.contentHeight - l.containerHeight && t < 0) return !l.settings.wheelPropagation } var i = a.scrollLeft; if (0 === t) { if (!l.scrollbarXActive) return !1; if (0 === i && e < 0 || i >= l.contentWidth - l.containerWidth && 0 < e) return !l.settings.wheelPropagation } return !0 }(o, s)) && (e.stopPropagation(), e.preventDefault())) }
                void 0 !== window.onwheel ? l.event.bind(a, "wheel", e) : void 0 !== window.onmousewheel && l.event.bind(a, "mousewheel", e) }
            t.exports = function(e) { r(e, i.get(e)) } }, { "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 14: [function(e, t, n) { "use strict"; var i = e("../instances"),
                r = e("../update-geometry");
            t.exports = function(e) { var t, n = i.get(e);
                t = e, n.event.bind(t, "scroll", function() { r(t) }) } }, { "../instances": 18, "../update-geometry": 19 }], 15: [function(e, t, n) { "use strict"; var d = e("../../lib/helper"),
                h = e("../instances"),
                p = e("../update-geometry"),
                m = e("../update-scroll");

            function i(a, e) { var l = null,
                    c = { top: 0, left: 0 };

                function u() { l && (clearInterval(l), l = null), d.stopScrolling(a) } var f = !1;
                e.event.bind(e.ownerDocument, "selectionchange", function() { var e;
                    a.contains(0 === (e = window.getSelection ? window.getSelection() : document.getSelection ? document.getSelection() : "").toString().length ? null : e.getRangeAt(0).commonAncestorContainer) ? f = !0 : (f = !1, u()) }), e.event.bind(window, "mouseup", function() { f && (f = !1, u()) }), e.event.bind(window, "mousemove", function(e) { if (f) { var t = e.pageX,
                            n = e.pageY,
                            i = a.offsetLeft,
                            r = a.offsetLeft + a.offsetWidth,
                            o = a.offsetTop,
                            s = a.offsetTop + a.offsetHeight;
                        t < i + 3 ? (c.left = -5, d.startScrolling(a, "x")) : r - 3 < t ? (c.left = 5, d.startScrolling(a, "x")) : c.left = 0, n < o + 3 ? (c.top = o + 3 - n < 5 ? -5 : -20, d.startScrolling(a, "y")) : s - 3 < n ? (c.top = n - s + 3 < 5 ? 5 : 20, d.startScrolling(a, "y")) : c.top = 0, 0 === c.top && 0 === c.left ? u() : l || (l = setInterval(function() { h.get(a) ? (m(a, "top", a.scrollTop + c.top), m(a, "left", a.scrollLeft + c.left), p(a)) : clearInterval(l) }, 50)) } }) }
            t.exports = function(e) { i(e, h.get(e)) } }, { "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 16: [function(e, t, n) { "use strict"; var y = e("../instances"),
                b = e("../update-geometry"),
                _ = e("../update-scroll");

            function i(a, l, e, t) {
                function c(e, t) { _(a, "top", a.scrollTop - t), _(a, "left", a.scrollLeft - e), b(a) } var u = {},
                    f = 0,
                    d = {},
                    n = null,
                    h = !1,
                    p = !1;

                function i() { h = !0 }

                function r() { h = !1 }

                function m(e) { return e.targetTouches ? e.targetTouches[0] : e }

                function g(e) { return !(!e.targetTouches || 1 !== e.targetTouches.length) || !(!e.pointerType || "mouse" === e.pointerType || e.pointerType === e.MSPOINTER_TYPE_MOUSE) }

                function o(e) { if (g(e)) { p = !0; var t = m(e);
                        u.pageX = t.pageX, u.pageY = t.pageY, f = (new Date).getTime(), null !== n && clearInterval(n), e.stopPropagation() } }

                function s(e) { if (!h && p && g(e)) { var t = m(e),
                            n = { pageX: t.pageX, pageY: t.pageY },
                            i = n.pageX - u.pageX,
                            r = n.pageY - u.pageY;
                        c(i, r), u = n; var o = (new Date).getTime(),
                            s = o - f;
                        0 < s && (d.x = i / s, d.y = r / s, f = o),
                            function(e, t) { var n = a.scrollTop,
                                    i = a.scrollLeft,
                                    r = Math.abs(e),
                                    o = Math.abs(t); if (r < o) { if (t < 0 && n === l.contentHeight - l.containerHeight || 0 < t && 0 === n) return !l.settings.swipePropagation } else if (o < r && (e < 0 && i === l.contentWidth - l.containerWidth || 0 < e && 0 === i)) return !l.settings.swipePropagation; return !0 }(i, r) && (e.stopPropagation(), e.preventDefault()) } }

                function v() {!h && p && (p = !1, clearInterval(n), n = setInterval(function() { y.get(a) ? Math.abs(d.x) < .01 && Math.abs(d.y) < .01 ? clearInterval(n) : (c(30 * d.x, 30 * d.y), d.x *= .8, d.y *= .8) : clearInterval(n) }, 10)) }
                e && (l.event.bind(window, "touchstart", i), l.event.bind(window, "touchend", r), l.event.bind(a, "touchstart", o), l.event.bind(a, "touchmove", s), l.event.bind(a, "touchend", v)), t && (window.PointerEvent ? (l.event.bind(window, "pointerdown", i), l.event.bind(window, "pointerup", r), l.event.bind(a, "pointerdown", o), l.event.bind(a, "pointermove", s), l.event.bind(a, "pointerup", v)) : window.MSPointerEvent && (l.event.bind(window, "MSPointerDown", i), l.event.bind(window, "MSPointerUp", r), l.event.bind(a, "MSPointerDown", o), l.event.bind(a, "MSPointerMove", s), l.event.bind(a, "MSPointerUp", v))) }
            t.exports = function(e, t, n) { i(e, y.get(e), t, n) } }, { "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 }], 17: [function(e, t, n) { "use strict"; var i = e("../lib/class"),
                r = e("../lib/helper"),
                o = e("./instances"),
                s = e("./update-geometry"),
                a = e("./handler/click-rail"),
                l = e("./handler/drag-scrollbar"),
                c = e("./handler/keyboard"),
                u = e("./handler/mouse-wheel"),
                f = e("./handler/native-scroll"),
                d = e("./handler/selection"),
                h = e("./handler/touch");
            t.exports = function(e, t) { t = "object" == typeof t ? t : {}, i.add(e, "ps-container"); var n = o.add(e);
                n.settings = r.extend(n.settings, t), i.add(e, "ps-theme-" + n.settings.theme), a(e), l(e), u(e), f(e), n.settings.useSelectionScroll && d(e), (r.env.supportsTouch || r.env.supportsIePointer) && h(e, r.env.supportsTouch, r.env.supportsIePointer), n.settings.useKeyboard && c(e), s(e) } }, { "../lib/class": 2, "../lib/helper": 6, "./handler/click-rail": 10, "./handler/drag-scrollbar": 11, "./handler/keyboard": 12, "./handler/mouse-wheel": 13, "./handler/native-scroll": 14, "./handler/selection": 15, "./handler/touch": 16, "./instances": 18, "./update-geometry": 19 }], 18: [function(e, t, n) { "use strict"; var s = e("../lib/class"),
                a = e("../lib/dom"),
                l = e("./default-setting"),
                c = e("../lib/event-manager"),
                r = e("../lib/guid"),
                u = e("../lib/helper"),
                o = {};

            function f(e) { var t, n, i = this;

                function r() { s.add(e, "ps-focus") }

                function o() { s.remove(e, "ps-focus") }
                i.settings = u.clone(l), i.containerWidth = null, i.containerHeight = null, i.contentWidth = null, i.contentHeight = null, i.isRtl = "rtl" === a.css(e, "direction"), i.isNegativeScroll = (n = e.scrollLeft, e.scrollLeft = -1, t = e.scrollLeft < 0, e.scrollLeft = n, t), i.negativeScrollAdjustment = i.isNegativeScroll ? e.scrollWidth - e.clientWidth : 0, i.event = new c, i.ownerDocument = e.ownerDocument || document, i.scrollbarXRail = a.appendTo(a.e("div", "ps-scrollbar-x-rail"), e), i.scrollbarX = a.appendTo(a.e("div", "ps-scrollbar-x"), i.scrollbarXRail), i.scrollbarX.setAttribute("tabindex", 0), i.event.bind(i.scrollbarX, "focus", r), i.event.bind(i.scrollbarX, "blur", o), i.scrollbarXActive = null, i.scrollbarXWidth = null, i.scrollbarXLeft = null, i.scrollbarXBottom = u.toInt(a.css(i.scrollbarXRail, "bottom")), i.isScrollbarXUsingBottom = i.scrollbarXBottom == i.scrollbarXBottom, i.scrollbarXTop = i.isScrollbarXUsingBottom ? null : u.toInt(a.css(i.scrollbarXRail, "top")), i.railBorderXWidth = u.toInt(a.css(i.scrollbarXRail, "borderLeftWidth")) + u.toInt(a.css(i.scrollbarXRail, "borderRightWidth")), a.css(i.scrollbarXRail, "display", "block"), i.railXMarginWidth = u.toInt(a.css(i.scrollbarXRail, "marginLeft")) + u.toInt(a.css(i.scrollbarXRail, "marginRight")), a.css(i.scrollbarXRail, "display", ""), i.railXWidth = null, i.railXRatio = null, i.scrollbarYRail = a.appendTo(a.e("div", "ps-scrollbar-y-rail"), e), i.scrollbarY = a.appendTo(a.e("div", "ps-scrollbar-y"), i.scrollbarYRail), i.scrollbarY.setAttribute("tabindex", 0), i.event.bind(i.scrollbarY, "focus", r), i.event.bind(i.scrollbarY, "blur", o), i.scrollbarYActive = null, i.scrollbarYHeight = null, i.scrollbarYTop = null, i.scrollbarYRight = u.toInt(a.css(i.scrollbarYRail, "right")), i.isScrollbarYUsingRight = i.scrollbarYRight == i.scrollbarYRight, i.scrollbarYLeft = i.isScrollbarYUsingRight ? null : u.toInt(a.css(i.scrollbarYRail, "left")), i.scrollbarYOuterWidth = i.isRtl ? u.outerWidth(i.scrollbarY) : null, i.railBorderYWidth = u.toInt(a.css(i.scrollbarYRail, "borderTopWidth")) + u.toInt(a.css(i.scrollbarYRail, "borderBottomWidth")), a.css(i.scrollbarYRail, "display", "block"), i.railYMarginHeight = u.toInt(a.css(i.scrollbarYRail, "marginTop")) + u.toInt(a.css(i.scrollbarYRail, "marginBottom")), a.css(i.scrollbarYRail, "display", ""), i.railYHeight = null, i.railYRatio = null }

            function i(e) { return void 0 === e.dataset ? e.getAttribute("data-ps-id") : e.dataset.psId }
            n.add = function(e) { var t, n, i = r(); return n = i, void 0 === (t = e).dataset ? t.setAttribute("data-ps-id", n) : t.dataset.psId = n, o[i] = new f(e), o[i] }, n.remove = function(e) { var t;
                delete o[i(e)], void 0 === (t = e).dataset ? t.removeAttribute("data-ps-id") : delete t.dataset.psId }, n.get = function(e) { return o[i(e)] } }, { "../lib/class": 2, "../lib/dom": 3, "../lib/event-manager": 4, "../lib/guid": 5, "../lib/helper": 6, "./default-setting": 8 }], 19: [function(e, t, n) { "use strict"; var i = e("../lib/class"),
                r = e("../lib/dom"),
                o = e("../lib/helper"),
                s = e("./instances"),
                a = e("./update-scroll");

            function l(e, t) { return e.settings.minScrollbarLength && (t = Math.max(t, e.settings.minScrollbarLength)), e.settings.maxScrollbarLength && (t = Math.min(t, e.settings.maxScrollbarLength)), t }
            t.exports = function(e) { var t, n = s.get(e);
                n.containerWidth = e.clientWidth, n.containerHeight = e.clientHeight, n.contentWidth = e.scrollWidth, n.contentHeight = e.scrollHeight, e.contains(n.scrollbarXRail) || (0 < (t = r.queryChildren(e, ".ps-scrollbar-x-rail")).length && t.forEach(function(e) { r.remove(e) }), r.appendTo(n.scrollbarXRail, e)), e.contains(n.scrollbarYRail) || (0 < (t = r.queryChildren(e, ".ps-scrollbar-y-rail")).length && t.forEach(function(e) { r.remove(e) }), r.appendTo(n.scrollbarYRail, e)), !n.settings.suppressScrollX && n.containerWidth + n.settings.scrollXMarginOffset < n.contentWidth ? (n.scrollbarXActive = !0, n.railXWidth = n.containerWidth - n.railXMarginWidth, n.railXRatio = n.containerWidth / n.railXWidth, n.scrollbarXWidth = l(n, o.toInt(n.railXWidth * n.containerWidth / n.contentWidth)), n.scrollbarXLeft = o.toInt((n.negativeScrollAdjustment + e.scrollLeft) * (n.railXWidth - n.scrollbarXWidth) / (n.contentWidth - n.containerWidth))) : n.scrollbarXActive = !1, !n.settings.suppressScrollY && n.containerHeight + n.settings.scrollYMarginOffset < n.contentHeight ? (n.scrollbarYActive = !0, n.railYHeight = n.containerHeight - n.railYMarginHeight, n.railYRatio = n.containerHeight / n.railYHeight, n.scrollbarYHeight = l(n, o.toInt(n.railYHeight * n.containerHeight / n.contentHeight)), n.scrollbarYTop = o.toInt(e.scrollTop * (n.railYHeight - n.scrollbarYHeight) / (n.contentHeight - n.containerHeight))) : n.scrollbarYActive = !1, n.scrollbarXLeft >= n.railXWidth - n.scrollbarXWidth && (n.scrollbarXLeft = n.railXWidth - n.scrollbarXWidth), n.scrollbarYTop >= n.railYHeight - n.scrollbarYHeight && (n.scrollbarYTop = n.railYHeight - n.scrollbarYHeight),
                    function(e, t) { var n = { width: t.railXWidth };
                        t.isRtl ? n.left = t.negativeScrollAdjustment + e.scrollLeft + t.containerWidth - t.contentWidth : n.left = e.scrollLeft, t.isScrollbarXUsingBottom ? n.bottom = t.scrollbarXBottom - e.scrollTop : n.top = t.scrollbarXTop + e.scrollTop, r.css(t.scrollbarXRail, n); var i = { top: e.scrollTop, height: t.railYHeight };
                        t.isScrollbarYUsingRight ? t.isRtl ? i.right = t.contentWidth - (t.negativeScrollAdjustment + e.scrollLeft) - t.scrollbarYRight - t.scrollbarYOuterWidth : i.right = t.scrollbarYRight - e.scrollLeft : t.isRtl ? i.left = t.negativeScrollAdjustment + e.scrollLeft + 2 * t.containerWidth - t.contentWidth - t.scrollbarYLeft - t.scrollbarYOuterWidth : i.left = t.scrollbarYLeft + e.scrollLeft, r.css(t.scrollbarYRail, i), r.css(t.scrollbarX, { left: t.scrollbarXLeft, width: t.scrollbarXWidth - t.railBorderXWidth }), r.css(t.scrollbarY, { top: t.scrollbarYTop, height: t.scrollbarYHeight - t.railBorderYWidth }) }(e, n), n.scrollbarXActive ? i.add(e, "ps-active-x") : (i.remove(e, "ps-active-x"), n.scrollbarXWidth = 0, n.scrollbarXLeft = 0, a(e, "left", 0)), n.scrollbarYActive ? i.add(e, "ps-active-y") : (i.remove(e, "ps-active-y"), n.scrollbarYHeight = 0, n.scrollbarYTop = 0, a(e, "top", 0)) } }, { "../lib/class": 2, "../lib/dom": 3, "../lib/helper": 6, "./instances": 18, "./update-scroll": 20 }], 20: [function(e, t, n) { "use strict"; var r, o, s = e("./instances"),
                a = document.createEvent("Event"),
                l = document.createEvent("Event"),
                c = document.createEvent("Event"),
                u = document.createEvent("Event"),
                f = document.createEvent("Event"),
                d = document.createEvent("Event"),
                h = document.createEvent("Event"),
                p = document.createEvent("Event"),
                m = document.createEvent("Event"),
                g = document.createEvent("Event");
            a.initEvent("ps-scroll-up", !0, !0), l.initEvent("ps-scroll-down", !0, !0), c.initEvent("ps-scroll-left", !0, !0), u.initEvent("ps-scroll-right", !0, !0), f.initEvent("ps-scroll-y", !0, !0), d.initEvent("ps-scroll-x", !0, !0), h.initEvent("ps-x-reach-start", !0, !0), p.initEvent("ps-x-reach-end", !0, !0), m.initEvent("ps-y-reach-start", !0, !0), g.initEvent("ps-y-reach-end", !0, !0), t.exports = function(e, t, n) { if (void 0 === e) throw "You must provide an element to the update-scroll function"; if (void 0 === t) throw "You must provide an axis to the update-scroll function"; if (void 0 === n) throw "You must provide a value to the update-scroll function"; "top" === t && n <= 0 && (e.scrollTop = n = 0, e.dispatchEvent(m)), "left" === t && n <= 0 && (e.scrollLeft = n = 0, e.dispatchEvent(h)); var i = s.get(e); "top" === t && n >= i.contentHeight - i.containerHeight && (e.scrollTop = n = i.contentHeight - i.containerHeight, e.dispatchEvent(g)), "left" === t && n >= i.contentWidth - i.containerWidth && (e.scrollLeft = n = i.contentWidth - i.containerWidth, e.dispatchEvent(p)), r || (r = e.scrollTop), o || (o = e.scrollLeft), "top" === t && n < r && e.dispatchEvent(a), "top" === t && r < n && e.dispatchEvent(l), "left" === t && n < o && e.dispatchEvent(c), "left" === t && o < n && e.dispatchEvent(u), "top" === t && (e.scrollTop = r = n, e.dispatchEvent(f)), "left" === t && (e.scrollLeft = o = n, e.dispatchEvent(d)) } }, { "./instances": 18 }], 21: [function(e, t, n) { "use strict"; var i = e("../lib/dom"),
                r = e("../lib/helper"),
                o = e("./instances"),
                s = e("./update-geometry"),
                a = e("./update-scroll");
            t.exports = function(e) { var t = o.get(e);
                t && (t.negativeScrollAdjustment = t.isNegativeScroll ? e.scrollWidth - e.clientWidth : 0, i.css(t.scrollbarXRail, "display", "block"), i.css(t.scrollbarYRail, "display", "block"), t.railXMarginWidth = r.toInt(i.css(t.scrollbarXRail, "marginLeft")) + r.toInt(i.css(t.scrollbarXRail, "marginRight")), t.railYMarginHeight = r.toInt(i.css(t.scrollbarYRail, "marginTop")) + r.toInt(i.css(t.scrollbarYRail, "marginBottom")), i.css(t.scrollbarXRail, "display", "none"), i.css(t.scrollbarYRail, "display", "none"), s(e), a(e, "top", e.scrollTop), a(e, "left", e.scrollLeft), i.css(t.scrollbarXRail, "display", ""), i.css(t.scrollbarYRail, "display", "")) } }, { "../lib/dom": 3, "../lib/helper": 6, "./instances": 18, "./update-geometry": 19, "./update-scroll": 20 }] }, {}, [1]),
    function() { $("#tt-pageContent .tt-toggle-aside"); var i = $("body"),
            r = $("html"),
            o = $("#js-aside");
        i.on("click", "#tt-pageContent .tt-toggle-aside", function(e) { var t = i.scrollTop() || r.scrollTop();
            o.toggleClass("column-open"), i.css("top", -t).addClass("no-scroll").append('<div class="modal-filter"></div>'); var n = $(".modal-filter").fadeTo("fast", 1); return n.length && n.on("click", function() { $btnClose.trigger("click") }), !1 }), i.on("click", ".tt-list-avatar .tt-item", function(e) { o.removeClass("column-open"); var t = -1 * parseInt(i.css("top").replace("px", ""), 10); return i.removeAttr("style").removeClass("no-scroll").scrollTop(t), r.removeAttr("style").scrollTop(t), $(".modal-filter").off().remove(), !1 }), $(window).resize(function(e) { $(".tt-list-avatar .tt-item").trigger("click") }) }(), (i = $("#tt-pageContent .js-init-scroll")) && i.perfectScrollbar(), (r = $("#tt-pageContent .tt-js-active-btn")).length && r.on("click", ".tt-button-icon", function(e) { return $(this).closest(r).find(".tt-button-icon").removeClass("active"), $(this).addClass("active"), !1 }), o = window.location.href, (s = $("#tt-header .tt-desktop-menu")) && (s.find("li").each(function() { var e = $(this).find("a").attr("href"); - 1 !== o.indexOf(e) && $(this).addClass("active") }), s.find("ul li").on("mouseenter", function() { var e = $(this).find("ul:first"); if ($(this).find("a:first").addClass("is-hover"), e.length) { var t = window.innerWidth,
                n = parseInt(e.css("width"), 10) + 20,
                i = this.getBoundingClientRect().right,
                r = this.getBoundingClientRect().left;
            t - i < n ? e.addClass("right-popup") : r < n && e.removeClass("right-popup") } }).on("mouseleave", function() { $(this).find("a:first").removeClass("is-hover") })), $("#tt-pageContent .tt-gallery-layout").each(function() { $(this).magnificPopup({ delegate: "a", type: "image", gallery: { enabled: !0 }, mainClass: "mfp-with-zoom" }) }), $("body").append('<div class="mm-fullscreen-bg"></div>'), $.fn.initMM = function() { var i = { $mobilemenu: $(".panel-menu"), external_con: "externaf", mm_close_button: "Close", mm_back_button: "Back", mm_breakpoint: 768, mm_enable_breakpoint: !1, mm_mobile_button: !1, remember_state: !1, second_button: !1, init: function(e, t) { var n = this; if (!n.$mobilemenu.length) return console.log('You not have <nav class="panel-menu mobile-main-menu">menu</nav>. See Documentation'), !1;
                null != t && n.parse_arguments(t), n.$mobilemenu.parse_mm(i), n.$mobilemenu.init_mm(i), n.mm_enable_breakpoint && n.$mobilemenu.check_resolution_mm(i), e.mm_handler(i) }, parse_arguments: function(e) { var n = this;
                Object(e).hasOwnProperty("menu_class") && (n.$mobilemenu = $("." + e.menu_class)), $.each(e, function(e, t) { switch (e) {
                        case "right":
                            t && n.$mobilemenu.addClass("mm-right"); break;
                        case "close_button_name":
                            n.mm_close_button = t; break;
                        case "back_button_name":
                            n.mm_back_button = t; break;
                        case "width":
                            n.$mobilemenu.css("width", t); break;
                        case "breakpoint":
                            n.mm_breakpoint = t; break;
                        case "enable_breakpoint":
                            n.mm_enable_breakpoint = t; break;
                        case "mobile_button":
                            n.mm_mobile_button = t; break;
                        case "remember_state":
                            n.remember_state = t; break;
                        case "second_button":
                            n.second_button = t; break;
                        case "external_container":
                            t && n.$mobilemenu.addClass(n.external_con) } }) }, show_button_in_mobile: function(e) { var t = this;
                t.mm_mobile_button && (window.innerWidth > t.mm_breakpoint ? e.hide() : e.show(), $(window).resize(function() { window.innerWidth > t.mm_breakpoint ? e.hide() : e.show() })) } };
        i.init($(this), arguments[0]), i.show_button_in_mobile($(this)) }, $.fn.check_resolution_mm = function(e) { var t = $(this);
        $(window).resize(function() { if (!$("body").hasClass("mm-open") || !t.hasClass("mmitemopen")) return !1;
            window.innerWidth > e.mm_breakpoint && t.closemm(e) }) }, $.fn.mm_handler = function(t) { $(this).click(function(e) { e.preventDefault(), t.$mobilemenu.openmm() }), 0 != t.second_button && $(t.second_button).click(function(e) { e.preventDefault(), t.$mobilemenu.openmm() }) }, $.fn.parse_mm = function(o) { var e, s = $(this).clone(),
            a = $('<div class="mmpanels"></div>'),
            l = !1,
            t = 0,
            n = !1,
            c = !1;
        $(this).empty(), s.find("a").each(function() { n = $(this), (e = n.parent().find("ul").first()).length && (t++, e.prepend("<li></li>").find("li").first().append(n.clone().addClass("mm-original-link")), n.attr("href", "#mm" + t).attr("data-target", "#mm" + t).addClass("mm-next-level")) }), s.find("ul").each(function(e) { var t, n, i, r;
            c = !1, l = $('<div class="mmpanel mmhidden">').attr("id", "mm" + e).append($(this)), 0 == e ? (l.addClass("mmopened").addClass("mmcurrent").removeClass("mmhidden"), i = s.find(".mm-closebtn").html(), r = o.mm_close_button, c = '<li class="mm-close-parent"><a href="#close" data-target="#close" class="mm-close">' + (i = null == i ? r : i) + "</a></li>", o.$mobilemenu.hasClass(o.external_con) && l.find("ul").first().append('<li id="entrypoint-objects"></li>')) : (t = s.find(".mm-backbtn").html(), n = o.mm_back_button, c = '<li><a href="#" data-target="#" class="mm-prev-level">' + (t = null == t ? n : t) + "</a></li>"), l.find("ul").first().prepend(c), a.append(l) }), $(this).append(a) }, $.fn.init_mm = function(r) { var o = $(this);
        o.find("a").each(function() { $(this).click(function(e) { var t = $(this),
                    n = !1,
                    i = ""; return t.hasClass("mm-next-level") ? (e.preventDefault(), i = t.attr("href"), (n = o.find(".mmcurrent")).addClass("mmsubopened").removeClass("mmcurrent"), o.find(i).removeClass("mmhidden"), setTimeout(function() { o.find(i).scrollTop(0).addClass("mmcurrent").addClass("mmopened") }, 0), setTimeout(function() { n.addClass("mmhidden") }, 300), !1) : t.hasClass("mm-prev-level") ? (e.preventDefault(), i = t.attr("href"), (n = o.find(".mmcurrent")).removeClass("mmcurrent").removeClass("mmopened"), o.find(".mmsubopened").last().removeClass("mmhidden").scrollTop(0).removeClass("mmsubopened").addClass("mmcurrent"), setTimeout(function() { n.addClass("mmhidden") }, 300), !1) : t.hasClass("mm-close") ? (o.closemm(r), !1) : void 0 }) }), $(".mm-fullscreen-bg").click(function(e) { e.preventDefault(), o.closemm(r) }) }, $.fn.openmm = function() { var e = $(this);
        e.show(), setTimeout(function() { $("body").addClass("mm-open"), e.addClass("mmitemopen"), $(".mm-fullscreen-bg").fadeIn(300) }, 0) }, $.fn.closemm = function(t) { var n = $(this);
        n.addClass("mmhide"), $(".mm-fullscreen-bg").fadeOut(300), setTimeout(function() { var e;
            e = n, t.remember_state || (e.find(".mmpanel").toggleClass("mmsubopened mmcurrent mmopened", !1).addClass("mmhidden"), e.find("#mm0").addClass("mmopened").addClass("mmcurrent").removeClass("mmhidden")), e.toggleClass("mmhide mmitemopen", !1).hide(), $("body").removeClass("mm-open") }, 300) };
var a, l, c, u, f, d, h, p, m, g, v = $(".toggle-mobile-menu"),
    y = $(".tt-desktop-menu"),
    b = $("#mobile-menu");
if (y && v) { var _ = y.find("ul").first().children().clone();
    b.find("ul").append(_), v.initMM({ enable_breakpoint: !0, mobile_button: !0, breakpoint: 1025 }) }(a = jQuery)(".modal").each(function() { var e, t = a(this); if (t.attr("data-pause")) { var n = a(this).attr("data-pause");
        e = t, setTimeout(function() { e.modal("show") }, n) } }), (d = $("#js-settings-btn")).length && (l = $("body"), c = $("html"), u = $("#js-popup-settings"), f = $(".tt-btn-col-close"), $("#js-settings-btn").on("click", function(e) { if (e.preventDefault(), $(this).hasClass("column-open")) return f.trigger("click"), !1;
    $(this).addClass("column-open"); var t = l.scrollTop() || c.scrollTop();
    u.toggleClass("column-open").perfectScrollbar(), l.css("top", -t).addClass("no-scroll").append('<div class="modal-filter"></div>'); var n = $(".modal-filter").fadeTo("fast", 1); return n.length && n.on("click", function() { f.trigger("click") }), !1 }), f.on("click", function(e) { e.preventDefault(), d.removeClass("column-open"), u.removeClass("column-open").perfectScrollbar("destroy"); var t = -1 * parseInt(l.css("top").replace("px", ""), 10); return l.removeAttr("style").removeClass("no-scroll").scrollTop(t), c.removeAttr("style").scrollTop(t), $(".modal-filter").off().remove(), !1 })), (h = $("#tt-pageContent .tt-search-compose .tt-search-results")) && h.perfectScrollbar(), (p = $("#tt-header .tt-search")).find(".tt-search-toggle"), m = p.find(".search-results"), (g = p.find(".tt-search__input")).length && m.length && (g.on("input", function(e) { $(e.target).val() && (m.fadeIn("200"), m.find(".tt-search-scroll").perfectScrollbar()) }), g.blur(function() { m.fadeOut("200") }));