<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" alt="" class="rounded-circle" style="width: 100px;">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Add new post.</a>
            </div>

            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong><?php echo e($user->profile->title); ?></strong></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" alt="" class="w-100">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\BT\freecodecamp\Insta\resources\views/home.blade.php ENDPATH**/ ?>