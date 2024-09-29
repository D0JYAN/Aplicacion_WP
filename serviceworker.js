const currentCache =  'cache-v2.0';

const files = 
[
    'css/**/*.css',
    'js/**/*.js',
    'img/**/*.png',
    'img/**/*.jpg',
    'img/**/*.svg',
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