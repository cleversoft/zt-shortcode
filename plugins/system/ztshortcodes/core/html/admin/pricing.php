<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Pricing</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'pricing-number'; ?>">Pricing Number</label>
        <select id="<?php echo $prefix . 'pricing-number'; ?>" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="6">6</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'pricing-type'; ?>">Pricing Type</label>
        <select id="<?php echo $prefix . 'pricing-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="attached">Attached</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <label>Pricing 1</label>

                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'title-pricing-1' ?>"
                           placeholder="Enter Title Pricing">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo $prefix . 'pricing-1-hightlight'; ?>"> Item Hightlight
                    </label>
                </div>
                <div class="form-group">
                    <textarea placeholder="Content Pricing" rows="3" class="form-control"
                              id="<?php echo $prefix . 'pricing-1-content' ?>"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'price-pricing-1' ?>"
                           placeholder="Enter Price (exp: $|90|per month).">
                </div>
                <div class="form-group">
                    <select id="<?php echo $prefix . 'pricing-button-1-type'; ?>" class="form-control">
                        <option value="none">Button Type</option>
                        <option value="default">Default</option>
                        <option value="primary">Primary</option>
                        <option value="success">Success</option>
                        <option value="info">Info</option>
                        <option value="warning">Warning</option>
                        <option value="danger">Danger</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'pricing-button-1-text' ?>"
                           placeholder="Enter Button Text">
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <label>Pricing 2</label>

                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'title-pricing-2' ?>"
                           placeholder="Enter Title Pricing">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo $prefix . 'pricing-2-hightlight'; ?>"> Item Hightlight
                    </label>
                </div>
                <div class="form-group">
                    <textarea placeholder="Content Pricing" rows="3" class="form-control"
                              id="<?php echo $prefix . 'pricing-2-content' ?>"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'price-pricing-2' ?>"
                           placeholder="Enter Price (exp: $|90|per month).">
                </div>
                <div class="form-group">
                    <select id="<?php echo $prefix . 'pricing-button-2-type'; ?>" class="form-control">
                        <option value="none">Button Type</option>
                        <option value="default">Default</option>
                        <option value="primary">Primary</option>
                        <option value="success">Success</option>
                        <option value="info">Info</option>
                        <option value="warning">Warning</option>
                        <option value="danger">Danger</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'pricing-button-2-text' ?>"
                           placeholder="Enter Button Text">
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <label>Pricing 3</label>

                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'title-pricing-3' ?>"
                           placeholder="Enter Title Pricing">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo $prefix . 'pricing-1-hightlight'; ?>"> Item Hightlight
                    </label>
                </div>
                <div class="form-group">
                    <textarea placeholder="Content Pricing" rows="3" class="form-control"
                              id="<?php echo $prefix . 'pricing-1-content' ?>"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'price-pricing-3' ?>"
                           placeholder="Enter Price (exp: $|90|per month).">
                </div>
                <div class="form-group">
                    <select id="<?php echo $prefix . 'pricing-button-3-type'; ?>" class="form-control">
                        <option value="none">Button Type</option>
                        <option value="default">Default</option>
                        <option value="primary">Primary</option>
                        <option value="success">Success</option>
                        <option value="info">Info</option>
                        <option value="warning">Warning</option>
                        <option value="danger">Danger</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="<?php echo $prefix . 'pricing-button-3-text' ?>"
                           placeholder="Enter Button Text">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'pricing-shortcode-content'; ?>">Shortcode Content</label>
        <textarea placeholder="Shortcode Content" rows="3" class="form-control" id="<?php echo $prefix.'pricing-shortcode-content'; ?>"></textarea>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix . 'insert-pricing'; ?>"
                class="btn btn-primary pricing-button-insert-shortcode">Insert Shortcode
        </button>
    </div>
</form>