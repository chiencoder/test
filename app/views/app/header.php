<div class="header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>pub/images/logo.png" class="img-responsive" alt=""></a>
        </div>
        <div class="header-left">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li>
                        <select class="form-control" id="cmd_province">
                            <option value="">Tỉnh / Thành phố</option>
                            <?php if (isset($provinces)): ?>
                                <?php foreach ($provinces as $province): ?>
                                    <option value="<?php echo $province->province_id; ?>"><?php echo $province->province_name; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </li>
                    <li>
                        <select class="form-control" id="cmd_district">
                            <option value="">Quận / Huyện</option>
                            <option value="">2</option>
                        </select>
                    </li>
                    <li>
                        <select class="form-control" id="cmd_ward">
                            <option value="">Phường / Xã</option>
                            <option value="">2</option>
                        </select>
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="">Lĩnh Vực</option>
                            <option value="">2</option>
                        </select>
                    </li>
                    <li>
                        <input type="text" class="form-control" placeholder="Từ khoá..."/>
                    </li>
                    <div class="clearfix"> </div>		
                </ul>
                <!-- script-for-nav -->
                <script>
                    $("span.menu").click(function () {
                        $(".head-nav ul").slideToggle(300, function () {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script-for-nav --> 
            </div>
            <div class="header-right1">
                <div class="cart box_1">	
                    <p><a href="" class="btn btn-warning">Đăng tin miễn phí</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>