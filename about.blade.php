
<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        
        <!--title-->
        <title>Contact : ClassXtra </title>

        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/web/images/fav.png">

        <!-- all css -->
        <!-- bootstrap v4 css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/bootstrap.min.css">
 <!-- font-awesome css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/font-awesome.min.css">
 <!-- animate css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/animate.css">
 <!-- owl.carousel css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/owl.carousel.css">
 <!-- slick css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/slick.css">
 <!-- magnific popup css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/magnific-popup.css">
 <!-- Offcanvas CSS -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/off-canvas.css">
 <!-- flaticon css  -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/fonts/flaticon.css">
 <!-- flaticon2 css  -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/fonts/fonts2/flaticon.css">
 <!-- rsmenu CSS -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/rsmenu-main.css">
 <!-- rsmenu transitions CSS -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/rsmenu-transitions.css">
 <!-- timeline css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/timeline.css">
 <!-- style css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/style.css">
 <!-- responsive css -->
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/web/css/responsive.css">

    <link rel='stylesheet' type='text/css' property='stylesheet' href='//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1634224082&theme=auto'><script type='text/javascript' src='//127.0.0.1:8000/_debugbar/assets/javascript?v=1634224082'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement('style'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '???'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '???'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>???</span>' : '<span>???</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>???</span>'; } else { elt.innerHTML = '<span>???</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '???'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ???</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ???</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>
    <body class="home1">

        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->
		
        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
                <!-- Toolbar Start -->
<div class="rs-toolbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="rs-toolbar-left">
                    <div class="welcome-message">
                        <i class="fa fa-bank"></i><span>Welcome to Classxtras</span> 
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rs-toolbar-right">
                    <div class="toolbar-share-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <a href="#" class="apply-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Toolbar End -->			<!-- Toolbar End -->
			
            
            <!-- header -->
                <!--Header Start-->
			<header id="rs-header" class="rs-header">
				
				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
						                    <a href="mailto:">
						                    	<span>Mail Us</span>
												
											</a>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="http://127.0.0.1:8000"><img src="web/images/logo.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
						                    <a href="tel:4155551234">
						                    	<span>Call Us</span>
												+234-811-271-6233
											</a>
						                </div>
						            </div>
						        </div>
							</div>
						</div>				
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
											<li class=""> 
                                                <a href="http://127.0.0.1:8000" class="home">Home</a>
											</li>
											<!-- End Home --> 
                                            
                                            <!--About Menu Start-->
                                            <li class="current_page_item"> 
												<a href="http://127.0.0.1:8000/about">About Us</a>
                                            </li>
                                            <!--About Menu End--> 
                                            
											<!--Events Menu Start-->
											<li class=""> 
												<a href="http://127.0.0.1:8000/events">Events</a>
											</li>
											<!--Events Menu End-->
                                            
                                            <!-- Drop Down -->
											<li class="menu-item-has-children "> <a href="#">Media</a>
                                                <ul class="sub-menu"> 
                                                    <li class="menu-item-has-children"> <a href="#">Videos</a>
                                                    </li>
                                                    
                                                    <li class=""> <a href="http://127.0.0.1:8000/gallery">Gallery</a>
                                                    </li>
                                                </ul>
											</li>
											<!--End Icons -->
											
											<!--blog Menu Start-->
											<li class=""> 
												<a href="http://127.0.0.1:8000/blogs">Blog</a>
											</li>
											<!--blog Menu End-->
                                            
											<!--Contact Menu Start-->
											    <li class=""> 
													<a href="http://127.0.0.1:8000/contact">Contact</a>
												</li>
								            <!--Contact Menu End-->
										</ul>
									</nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->            <!-- end header -->

		</div>
        <!--Full width header End-->
		
        <!-- content goes here -->

                <div class="main">
        
		<!-- Slider Area Start -->

        <!-- Slider Area End -->
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">About</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="http://127.0.0.1:8000">Home</a>
		                        </li>
		                        <li>About</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>
		<!-- Breadcrumbs End -->
		
		
		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="#">
							<img src="http://127.0.0.1:8000/web/images/about/history.jpg" alt="History Image"/>
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR HISTORY</h2>
		                </div>
                    	<div class="about-desc">
                			<p>Comfor Learning.</p>

                			<p>We believe that education is the most potent panacea to solving societal challenges. We channel our energy towards ensuring teaching
               your students comes at ease. The provisions of the platform is to enable the minds of your students goes through contents that will
               provide them with a positive attitude and knowledge to excel, not only during their time of study but in life generally. We want all
               your students to be successful; to reach for success from the very first day they start using our platform and throughout their school
               lives so that when they are done; they have a love of learning for the rest of their lives.</p>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        <div class="rs-mission sec-color sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
		                <div class="abt-title">
		                    <h2>OUR MISSION</h2>
		                </div>
                    	<div class="about-desc">
                			<p>Learning and Teaching at ease</p>

                			<p>Our Mission is to ensure students and teachers alike enjoy learning at teaching without any form of stress in anyway at all. we want to ensure effectiveness in teaching virtually.</p>
                    	</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="row">
                    		<div class="col-md-6 mobile-mb-30">
                    			<a href="#">
									<img src="http://127.0.0.1:8000/web/images/about/mission1.jpg" alt="Mission Image"/>
		                    	</a> 
                    		</div>
                    		<div class="col-md-6">
		                    	<a href="#">
									<img src="http://127.0.0.1:8000/web/images/about/mission2.jpg" alt="Mission Image"/>
		                    	</a>                 			
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
                        <div class="vision-img rs-animation-hover">
							<img src="http://127.0.0.1:8000/web/images/about/vision.jpg" alt="img02"/>
							<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
							</a>
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR VISION</h2>
		                </div>
                    	<div class="vision-desc">
                			<p>Comfort Education</p>

                			<p>We want all
               your students to be successful; to reach for success from the very first day they start using our platform and throughout their school
               lives so that when they are done; they have a love of learning for the rest of their lives</p>
                    	</div>
                    </div>
                </div>
            </div>
        </div>

		<!-- Timeline Start -->
        <div class="sec-spacer">
            <div class="container-fluid">
            	<div class="sec-title mb-30 text-center">
            	    <h2>WELCOME TO ClassXtra TIMELINE</h2>      
            		<p>Considering desire as primary motivation for the generation support.</p>
            	</div>
            	<div class="rs-timeline-2">
	                <ol>
	                    
	                    <li>
	                        <div>
	                            <time>2021</time>UBA Schorlarship for best graduating students across in her secondary school competition of 2021.
	                        </div>
	                    </li>
	                    <li>
	                        <div>
	                            <time>2021</time> GTB get set for the Inter-House sport activities for the year 2021 and all secondary school's are getting set.
	                        </div>
	                    </li>
	                    <li>
	                        <div>
	                            <time>2022</time>Preparation at high geer for the conference to discuss "The Impact of Women in the8 21st Century Education".
	                        </div>
	                    </li>
	                    <li>
	                        <div>
	                            <time>2021</time> Evaluating the impact of Covid-19 in learning and the passage of knowledge in 2021 and beyond.
	                        </div>
	                    </li>
	                    <li>
	                        <div>
	                            <time>2020</time>Getting the Foundation right, the basis for the development and growth of the larger society.
	                        </div>
	                    </li>
	                    <li>
	                        <div>
	                            <time>2022</time>Embracing Technology in learning and teaching post covid-19, the ClassXtra Comncept.
	                        </div>
	                    </li>
	                    
	                    <li></li>
	                </ol>
	                <div class="arrows">
	                    <button class="arrow arrow__prev disabled" disabled></button>
	                    <button class="arrow arrow__next"></button>
	                  </div>        		
            	</div>
            </div>
        </div>
        <!-- Timeline End -->

		
		<!-- Team Start -->
        <div id="rs-team" class="rs-team sec-spacer">
            <div class="container">
                <div class="sec-title-2 mb-50 text-center">
                    <h2>Technical Support Team</h2>      
                	<p>Our support team consist of expert in the tech-space that have handon jobs for years and are always ready to assist you set-up your school.</p>
                </div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="http://127.0.0.1:8000/web/images/team/1.jpg" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Confidence Ugolo</h3>
                                <span class="subtitle">Tech-LEAD</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
									<h3 class="team-name"><a href="teachers-single-2.html">Confidence Ugolo</a></h3>
									<span class="team-title">Tech-LEAD</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation of Technical support.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="http://127.0.0.1:8000/web/images/team/2.jpg" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Mishael Abiola</h3>
                                <span class="subtitle">Head Of Operation</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Mishael Abiola</a></h3>
                                    <span class="team-title">Head of Operation</span>
                                    <p class="team-desc">Entrusted with planning and coordination of general operation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="http://127.0.0.1:8000/web/images/team/3.jpg" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Tole Olotu</h3>
                                <span class="subtitle">Customer Relation</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single-2.html">Tope Olotu</a></h3>
                                    <span class="team-title">Customer Relations</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation of Customer Relations.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <!-- Team End -->

        <!-- Branches Start -->
        <div id="rs-branches" class="rs-branches sec-color pt-100 pb-70">
            <div class="container">
                <div class="sec-title-2 mb-50 text-center">
                    <h2>OUR Schools</h2>      
                	<p>Our School's are of Cambridge Standards and they gives the best to the students.</p>
                </div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="http://127.0.0.1:8000/web/images/about/australia.png" alt="Australia Flag">
							<h3>
								<span>01</span>
								Pamper Private School
							</h3>
							<p>
								Lekki Phase 1<br>
								Lekki, Lagos Nigeria
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="http://127.0.0.1:8000/web/images/about/china.png" alt="China Flag">
							<h3>
								<span>02</span>
								Rainbow College
							</h3>
							<p>
								Surulere<br>
								Lagos, Nigeria
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Branches End -->

    </div>
	

        <!-- content ends here -->
       
        <!-- Footer Start -->
            <!-- Footer Start -->
 <footer id="rs-footer" class="bg3 rs-footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="http://127.0.0.1:8000/web/images/logo-footer.png" alt="Footer Logo">
                        <p>Provide a secure and stimulating platform that is conducive to all student's.</p>
                        <p class="margin-remove">Comfort Learning</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="recent-post-widget">
                                                    <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">Doing the best to raise the best Student's</a></h5>
                                    <span class="post-category">Keyword Analysis</span>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">Our Goal is to continue to put in our all for our schools</a></h5>
                                    <span class="post-category">Spoken English</span>
                                </div>
                            </div>
                                            </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="http://127.0.0.1:8000"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li ><a href="http://127.0.0.1:8000/about"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="http://127.0.0.1:8000/events"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
                        <li><a href="http://127.0.0.1:8000/privacy-policy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                        <li><a href="http://127.0.0.1:8000/terms-of-use"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms Of Use</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">NEWSLETTER</h5>
                    <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                    <form class="news-form">
                        <input type="text" class="form-input" name="email" required placeholder="Enter Your Email">
                        <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>?? 2021 <a href="https://www.wusobtech.com" target="_blank">Wusob Technologies</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		
		<!-- Canvas Menu start -->
            <nav class="right_menu_togle">
        	<div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
            <div class="canvas-logo">
                <a href="index.html"><img src="images/logo-white.png" alt="logo"></a>
            </div>
        	<ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start-->
                <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">Home One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Home Menu End-->
                
                <!--About Menu Start-->
                <li class="menu-item-has-children"><a href="#">About Us</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--About Menu End-->
                
                <!--Pages Menu Start-->
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Pages Menu End-->
                
                <!--Courses Menu Star-->
                <li class="menu-item-has-children"><a href="#">Courses</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Courses Menu End-->
                
                <!--Events Menu Star-->
                <li class="menu-item-has-children"><a href="#">Events</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Events Menu End-->
                
                <!--blog Menu Star-->
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--blog Menu End-->
                <li><a href="contact.html">Contact<span class="icon"></span></a></li>
        	</ul>
            <div class="search-wrap"> 
                <label class="screen-reader-text">Search for:</label> 
                <input type="search" placeholder="Search..." name="s" class="search-input" value=""> 
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div>
        </nav>        <!-- Canvas Menu end -->
        
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End --> 
        
        <!-- all js -->
        <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- modernizr js -->
<script src="http://127.0.0.1:8000/web/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="http://127.0.0.1:8000/web/js/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="http://127.0.0.1:8000/web/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="http://127.0.0.1:8000/web/js/owl.carousel.min.js"></script>
<!-- slick.min js -->
<script src="http://127.0.0.1:8000/web/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="http://127.0.0.1:8000/web/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="http://127.0.0.1:8000/web/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="http://127.0.0.1:8000/web/js/wow.min.js"></script>
<!-- counter top js -->
<script src="http://127.0.0.1:8000/web/js/waypoints.min.js"></script>

<script src="http://127.0.0.1:8000/web/js/jquery.counterup.min.js"></script>
<!-- magnific popup -->
<script src="http://127.0.0.1:8000/web/js/jquery.magnific-popup.min.js"></script>
<!-- rsmenu js -->
<script src="http://127.0.0.1:8000/web/js/rsmenu-main.js"></script>
<!-- timeline js -->
<script src="http://127.0.0.1:8000/web/js/timeline.js"></script>
<!-- plugins js -->
<script src="http://127.0.0.1:8000/web/js/plugins.js"></script>
<!-- main js -->
<script src="http://127.0.0.1:8000/web/js/main.js"></script>    <script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/127.0.0.1:8000\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"Xc2aecd1ae6fbcac7f7df973010e23f06","datetime":"2021-10-25 14:10:25","utime":1635171025.997451,"method":"GET","uri":"\/about","ip":"127.0.0.1"},"php":{"version":"7.4.0","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1635171024.76656,"end":1635171025.997497,"duration":1.2309370040893555,"duration_str":"1.23s","measures":[{"label":"Booting","start":1635171024.76656,"relative_start":0,"end":1635171025.646588,"relative_end":1635171025.646588,"duration":0.8800280094146729,"duration_str":"880ms","params":[],"collector":null},{"label":"Application","start":1635171025.659163,"relative_start":0.8926029205322266,"end":1635171025.997503,"relative_end":5.9604644775390625e-6,"duration":0.33834004402160645,"duration_str":"338ms","params":[],"collector":null}]},"memory":{"peak_usage":20306976,"peak_usage_str":"19MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":8,"templates":[{"name":"web.about (\\resources\\views\\web\\about.blade.php)","param_count":5,"params":["logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.layouts.app (\\resources\\views\\web\\layouts\\app.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.style (\\resources\\views\\web\\includes\\style.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.toolbar (\\resources\\views\\web\\includes\\toolbar.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.header (\\resources\\views\\web\\includes\\header.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.footer (\\resources\\views\\web\\includes\\footer.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.side (\\resources\\views\\web\\includes\\side.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"},{"name":"web.includes.script (\\resources\\views\\web\\includes\\script.blade.php)","param_count":8,"params":["__env","app","errors","logo_image","logo_text_image","logo_icon_image","web_assets","admin_assets"],"type":"blade"}]},"route":{"uri":"GET about","middleware":"web","controller":"App\\Http\\Controllers\\HomeController@about","namespace":"App\\Http\\Controllers","prefix":null,"where":[],"as":"about","file":"\\app\\Http\\Controllers\\HomeController.php:58-61"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"models":{"data":[],"count":0},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"GcJht3kXNi9BW2WxOWArgQnrL5lOS3YUfIEk16Jw","PHPDEBUGBAR_STACK_DATA":"[]","_previous":"array:1 [\n  \"url\" => \"http:\/\/127.0.0.1:8000\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]"},"request":{"path_info":"\/about","status_code":"<pre class=sf-dump id=sf-dump-1830411112 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-1830411112\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-1343018392 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1343018392\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-885387 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-885387\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1090556720 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"64 characters\">&quot;Chromium&quot;;v=&quot;94&quot;, &quot;Google Chrome&quot;;v=&quot;94&quot;, &quot;;Not A Brand&quot;;v=&quot;99&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"114 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/94.0.4606.81 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"22 characters\">http:\/\/127.0.0.1:8000\/<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"413 characters\">classxtra_session=dTjSiSppkc2P1PomWtEdgkcqamCBjnP5fwSNJ9Kh; XSRF-TOKEN=eyJpdiI6InZmRUU3RWljN3RWVVUveHRmRnl0Snc9PSIsInZhbHVlIjoiT3BicDlrZ2grdXBqcEdxbFlTMFVwYithWFdBMHl0Zys2U3FVYmU3T1hlSXpXVm50WDYvcHFVVXRpQVRXZndyTHNZUVBWTExrNHRyWWdZYW52c211ci9ka0FnUTVpYjRmYjRoK21nSzRpYjRBbG5jYUFVQzhCS29IdC9FUjM3cWgiLCJtYWMiOiI4NWY0NDc5Y2U5ODZmZWU3NzYzZDc3NzhmMDAzM2RlZDE1ZmY0NDllMDRiZDdlMDU0YWZjZDYxOTc3M2I1OTk0IiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1090556720\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-670042574 data-indent-pad=\"  \"><span class=sf-dump-note>array:31<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"46 characters\">C:\\Users\\User\\Desktop\\school_management\\public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">52607<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"28 characters\">PHP 7.4.0 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8000<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/about<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"56 characters\">C:\\Users\\User\\Desktop\\school_management\\public\\index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/about<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"16 characters\">\/index.php\/about<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"64 characters\">&quot;Chromium&quot;;v=&quot;94&quot;, &quot;Google Chrome&quot;;v=&quot;94&quot;, &quot;;Not A Brand&quot;;v=&quot;99&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"114 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/94.0.4606.81 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"22 characters\">http:\/\/127.0.0.1:8000\/<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"413 characters\">classxtra_session=dTjSiSppkc2P1PomWtEdgkcqamCBjnP5fwSNJ9Kh; XSRF-TOKEN=eyJpdiI6InZmRUU3RWljN3RWVVUveHRmRnl0Snc9PSIsInZhbHVlIjoiT3BicDlrZ2grdXBqcEdxbFlTMFVwYithWFdBMHl0Zys2U3FVYmU3T1hlSXpXVm50WDYvcHFVVXRpQVRXZndyTHNZUVBWTExrNHRyWWdZYW52c211ci9ka0FnUTVpYjRmYjRoK21nSzRpYjRBbG5jYUFVQzhCS29IdC9FUjM3cWgiLCJtYWMiOiI4NWY0NDc5Y2U5ODZmZWU3NzYzZDc3NzhmMDAzM2RlZDE1ZmY0NDllMDRiZDdlMDU0YWZjZDYxOTc3M2I1OTk0IiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1635171024.7666<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1635171024<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-670042574\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-2035973552 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>classxtra_session<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">GcJht3kXNi9BW2WxOWArgQnrL5lOS3YUfIEk16Jw<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-2035973552\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-606796345 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Mon, 25 Oct 2021 14:10:25 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6ImU0NlJpRjNWQ0ZIMXB2L0VnWXVkMWc9PSIsInZhbHVlIjoidklaSVl3UnpvVEgxc3FSbHVnQWxLVm41RmVoOGkvTEZKR0FvR2c0bVJGODVhUFBrenc2OC9rQ2dicXEzemlCQjJkMy9IbkJqSmltZVpEcTJsTkl5eEJTdDJ3VFB5Q1RCRkU3OFJHcUNzZmkvSGx4U24rRkkzTzYycjJiVDZNbnAiLCJtYWMiOiJhNTY0NzBhMTFhNDZjODc2M2FlOWVjNmRiMzczNDRiZmRmMmM5OWQ2M2M4ZmFkZmQ2ZjI1ZTFlNTJlNzBmNWRjIiwidGFnIjoiIn0%3D; expires=Mon, 25-Oct-2021 16:10:25 GMT; Max-Age=7199; path=\/; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6ImU0NlJpRjNWQ0ZIMXB2L0VnWXVkMWc9PSIsInZhbHVlIjoidklaSVl3UnpvVEgxc3FSbHVnQWxLVm41RmVoOGkvTEZKR0FvR2c0bVJGODVhUFBrenc2OC9rQ2dicXEzemlCQjJkMy9IbkJqSmltZVpEcTJsTkl5eEJTdDJ3VFB5Q1RCRkU3OFJHcUNzZmkvSGx4U24rRkkzTzYycjJiVDZNbnAiLCJtYWMiOiJhNTY0NzBhMTFhNDZjODc2M2FlOWVjNmRiMzczNDRiZmRmMmM5OWQ2M2M4ZmFkZmQ2ZjI1ZTFlNTJlNzBmNWRjIiwidGFnIjoiIn0%3D; expires=Mon, 25-Oct-2021 16:10:25 GMT; path=\/<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-606796345\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-1703317073 data-indent-pad=\"  \"><span class=sf-dump-note>array:4<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">GcJht3kXNi9BW2WxOWArgQnrL5lOS3YUfIEk16Jw<\/span>\"\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"21 characters\">http:\/\/127.0.0.1:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1703317073\", {\"maxDepth\":0})<\/script>\n"}}, "Xc2aecd1ae6fbcac7f7df973010e23f06");

</script>
</body>
</html>