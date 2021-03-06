slidr.create('slidr-section',{
	after: function(e) { console.log('in: ' + e.in.slidr); },
	before: function(e) { console.log('out: ' + e.out.slidr); },
	breadcrumbs: true,
	controls: 'border',
	direction: 'horizontal',
	fade: false,
	keyboard: true,
	overflow: false,
	pause: false,
	theme: '#FFF',
	timing: { 'cube': '0.5s ease-in' },
	touch: true,
	transition: 'cube',	
}).start();
