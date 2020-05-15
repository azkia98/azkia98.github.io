<?php $__env->startSection('content'); ?><p>To provide fast, local search of your blog, this starter template comes with a pre-built Vue.js component that uses Fuse.js. <a href="http://fusejs.io/">Fuse.js</a> is a "lightweight fuzzy-search library with <em>no</em> dependencies." It works by running queries against a JSON index of your content.</p>

<p>During the <a href="http://jigsaw.tighten.co/docs/building-and-previewing/">build process</a>, the contents of your <code>posts</code> collection is processed by the <code>GenerateIndex.php</code> listener, and an <code>index.json</code> file is generated in the build directory. The <code>Search.vue</code> component provides a search input that queries this local index.</p>

<p>If you'd like to customize the generation of your search index, take a look at the <code>handle</code> method of the <code>GenerateIndex.php</code> file.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>