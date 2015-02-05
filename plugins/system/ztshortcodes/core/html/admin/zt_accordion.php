<?php
$prefix = 'zo2-sc-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'accordion-number'; ?>">Number Accordion</label>
        <select id="<?php echo $prefix.'accordion-number'; ?>" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'accordion-title-1' ?>">Accordion Title 1</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'accordion-title-1' ?>" placeholder="Accordion Title 1">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'accordion-content-1' ?>">Accordion Content 1</label>
        <textarea placeholder="Content Accordion 1" rows="3" class="form-control" id="<?php echo $prefix.'accordion-content-1' ?>"></textarea>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix.'accordion-active-1'; ?>"> Active
        </label>
    </div>
</form>