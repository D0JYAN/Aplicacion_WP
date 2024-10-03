const currentCache =  'cache-v2.1';

const files = 
[
    'css/estilo_001.css',
    'css/estilo_002.css',
    'img/icon_logo.png',
    'index.php'
];

self.addEventListener("install", function (e) {
    e.waitUntil(
        caches.open(currentCache)
       .then(function (cache) {
        return cache.addAll(files);
       })
    );
})