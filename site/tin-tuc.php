<section class="">
    <div class="max-w-7xl mx-auto p-2">
        <div class="grid grid-cols-2 gap-2 py-2">
            <div class="column">
                <div class="grid grid-cols-2 gap-2">
                <?php foreach ($news as $key => $value) : ?>
                    <div class="m-column">
                        <a href="">
                            <h3 class="absolute px-2 pt-[120px] text-white">
                                <b><?php echo $value->name?></b>
                            </h3>
                        </a>
                        <a href=""><img
                                src="../layout/assets/img/news/<?php echo $value->images?>"
                                class="w-full"></a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-2 py-2 ">
        </div>
        <div class="content pt-10">
            <h1 class="font-bold text-2xl text-[#0194f3]">
                KHÁCH SẠN
            </h1>
            <hr>
            <div class="grid grid-cols-2 gap-8 pt-5">
            <?php foreach ($news as $key => $value) : ?>
                <div class="col">
                <a href=""><img src="../layout/assets/img/news/<?php echo $value->images?>" alt=""
                                class="h-32"></a>
                    <a href="">
                        <h1 class="font-bold text-xl pt-3 text-[#0194f3]">
                        <?php echo $value->name?>
                        </h1>
                    </a>
                    <p class="py-3">by <span class="font-bold pr-4 text-[#0194f3]"><?php echo $value->admin_name?></span>|<span class="px-4"> <?php echo $value->created_at?></span></p>
                    <p class="pb-4"><?php echo $value->content?></p>
                    <a href="" class="font-bold hover:text-blue-600 pt-4 text-[#0194f3]">View All ></a>
                </div>
                <?php endforeach ?>

                <div class="">
                    <?php foreach ($news as $key => $value) : ?>
                    <div class="flex pt-3">
                        <a href=""><img src="../layout/assets/img/news/<?php echo $value->images?>" alt=""
                                class="h-32"></a>
                        <p class="px-2"><a href=""><span class="font-bold text-[#0194f3]">
                                    <?php echo $value->name?></span></a>
                            <br>
                            <span><?php echo $value->created_at?></span>
                        </p>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>