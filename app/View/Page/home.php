<div class="card">
    <div class="card-header">
        <form method="get" class="form-inline row g-3">
            <div class="col">
                <input class="form-control mr-sm-2" type="number" placeholder="Price" aria-label="Vehicle Price" name="vehicle_price" value="<?php print $vehiclePrice; ?>">
            </div>
            <div class="col">
                <div class="form-check form-switch">
                    <input class="form-control form-check-input" type="checkbox" value="true" id="flexCheckDisabled" name="is_luxury" <?php print $vehicleType == 'luxury' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexCheckDisabled">
                        Is Luxury Car
                    </label>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <?php if (isset($fees)) : ?>
        <div class="card-body">
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Cost description</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fees as $key => $fee) : ?>
                            <tr>
                                <th scope="row"><?php echo $fee['label']; ?></th>
                                <td><?php echo $fee['value']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p class="fs-2">Total Price: <span><?php echo $total; ?></span></p>
            </div>
        </div>
    <?php endif; ?>
</div>