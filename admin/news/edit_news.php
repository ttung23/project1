<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">SỬA TIN TỨC</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_new_edit; $i++) { ?>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" type="text" name="id" value="<?= $news_edit[$i]->news_id ?>" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tiêu đề</label>
                            <input value="<?= $news_edit[$i]->name ?>" type="text" name="name_new[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_new'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name_new'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Ảnh hiện tại</label>
                            <input type="hidden" name="image[]" value="<?= $news_edit[$i]->images ?>" id="">
                            <img src="../../layout/assets/img//news/<?= $news_edit[$i]->images ?>" alt="" width="150px">
                        </div>

                        <div>
                            <label for="">Ảnh</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div class="col-span-3">
                            <label for="">Nội dung</label>
                            <textarea class="border rounded border-sky-400 w-full p-2" name="content[]" id="ten" cols="30"
                                rows="5"><?= $news_edit[$i]->content ?></textarea>
                            <script>CKEDITOR.replace('ten');</script>

                            <?php if (isset($err['content'][$i])) { ?>
                                <span class="text-red-500"><?= $err['content'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                <div class="col-span-3 flex justify-between">
                    <button name="btn_edit_new" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Sửa tin tức
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../news/c_news.php">Xem danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>