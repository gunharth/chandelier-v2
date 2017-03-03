import VueRouter from 'vue-router';

let routes = [
	{ 	path: '/', 			component: require('./views/jobs'		) },
	{ 	path: '/items', 	component: require('./views/items'		) },
	{ 	path: '/products', 	component: require('./views/products'	) }
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});

