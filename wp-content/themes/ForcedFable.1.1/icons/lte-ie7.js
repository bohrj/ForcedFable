/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-quill' : '&#xe000;',
			'icon-location' : '&#xe001;',
			'icon-leaf' : '&#xe002;',
			'icon-mobile' : '&#xe009;',
			'icon-twitter' : '&#xe003;',
			'icon-facebook' : '&#xe004;',
			'icon-github' : '&#xe005;',
			'icon-dribbble' : '&#xe006;',
			'icon-forrst' : '&#xe007;',
			'icon-phone' : '&#xe008;',
			'icon-alarm' : '&#xe00a;',
			'icon-books' : '&#xe00b;',
			'icon-library' : '&#xe00c;',
			'icon-profile' : '&#xe00d;',
			'icon-confused' : '&#xe00e;',
			'icon-earth' : '&#xe00f;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};