<div class="direct-chat-messages" id="chat-body">
    <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($chat->emp_id <> session('emp_id')): ?> 
            <!-- Message to the left -->
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left"><?php echo e($chat->emp_first_name); ?></span>
                    <span class="direct-chat-timestamp float-right"><?php echo e(Carbon\Carbon::parse($chat->cht_date_created)->diffForHumans()); ?></span>
                </div>
                <img class="direct-chat-img" src="<?php echo e(asset(get_avatar($chat->emp_id))); ?>" alt="message user image">
                <div class="direct-chat-text">
                    <?php echo e($chat->cht_message); ?>

                </div>
            </div>
        <?php else: ?>
            <!-- Message to the right -->
            <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right"><?php echo e($chat->emp_first_name); ?></span>
                    <span class="direct-chat-timestamp float-left"><?php echo e(Carbon\Carbon::parse($chat->cht_date_created)->diffForHumans()); ?></span>
                </div>
                <img class="direct-chat-img" src="<?php echo e(asset(get_avatar($chat->emp_id))); ?>" alt="message user image">
                <div class="direct-chat-text">
                    <a style="color:white;" href="<?php echo e(action('ChatController@delete',[$chat->cht_id])); ?>"><span class="fa fa-trash"></span></a> <?php echo e($chat->cht_message); ?>

                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<script>
    setInterval(function(){
        var url='<?php echo e(URL::route('chat')); ?>';
        var chatBody=$('#chat-body');
        $.get(url)
            .done(function(r){
                chatBody.replaceWith(r);
            })
            .fail(function(){
            });
    }, 60000);
</script>
        <?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/chat.blade.php ENDPATH**/ ?>