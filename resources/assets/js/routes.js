import VueRouter from 'vue-router';

let routes = [
	{ path: '/', 		component: require('./views/Jobs'	) },
	{ path: '/items', 	component: require('./views/items'	) }
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});

