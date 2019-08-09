;
//asignar un nombre y version al cache
const CACHE_NAME = 'v1_cache_EVelasquez_developer',
	urlsToCache = [
		'./',
		'./css/bootstrap.min.css',
		'./css/all.min.css',
		'./css/estilos.css',
		'./css/mdb.css',
		'./js/jquery-3.4.1.min.js',
		'./js/tether.min.js',
		'./js/bootstrap.min.js',
		'./js/animaciones.js',
		'./js/scrollflow.min.js',
		'./script.js',
		'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js',
		'./images/favicon.png',
		'./images/'
	]

// 3 eventos muy importantes del Service Worker
// Durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
	e.waitUntil(
		caches.open(CACHE_NAME)
		.then(cache => {
			return cache.addAll(urlsToCache)
			.then(() => self.skipWaiting())
		})
		.catch(err => console.log('Falló registro de cache', err))
	)
})

// Una vez que se instala el Service Worker, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
	const cacheWhiteList = [CACHE_NAME] //copia para comparar si la información del cache original ha cambiado 

	e.waitUntil(
		caches.keys()
		.then(cacheNames => { // Los nombres de todo lo almacenado en cache
			return Promise.all(
				cacheNames.map(cacheName => { // Evalua uno por uno
					// Eliminamos lo que ya no se necesita en cache
					if (cacheWhiteList.indexOf(cacheName) === -1) {
						return caches.delete(cacheName)
					}
				})
			)
		})
		// Le indica al Service Worker actuvar el cache actual
		.then(() => self.clients.claim())
		// Catch
	)
})

// Cuando el navegador recupera una URL
self.addEventListener('fetch', e => {
	// Responder ya sea con el objeto en caché o continuar y buscar la ruta real
	e.respondWith(
		caches.match(e.request)
		.then(res => {
			if (res) {
				// recuperar del cache
				return res
			}

			// Recuperar de la peticion a la URL
			return fetch(e.request)
		})
	)
})