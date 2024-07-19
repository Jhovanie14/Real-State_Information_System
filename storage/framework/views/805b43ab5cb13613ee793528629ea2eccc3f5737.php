
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ">HDMF Loan Reservation</h1>
                    </div>
                    <div class="col-sm-6 ">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item"><a href="/reservations">Reservations</a>
                            </li>
                            <li class="breadcrumb-item">HDMF Loan Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container-fluid">
                <form action="/reservations/hdmf-loan" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="col-12">
                        <div class="card">



                            <div class="card-body">
                                
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-md-5 pr-1 d-flex flex-column justify-content-start ">
                                            <div class="d-flex flex-column text-md-left text-center ">
                                                <div class="text-center">
                                                    <img src="<?php echo e(asset('/images/housemodels/delfina/maria_delfina.png')); ?>"
                                                        alt="House Model" class="rounded shadow mr-3 img-fluid w-100"
                                                        id="selected-image">
                                                </div>

                                                <div class="d-flex justify-content-start align-items-center mt-4 ">
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div id="propertyDetails"
                                                    class="text-center d-flex flex-column align-items-center justify-content-center">
                                                    <span class="display-4" id="house-model">Maria Delfina</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <span class="text-secondary text-xs">HOUSE MODEL</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group pb-0 mb-3">
                                                <label for="clientList" class="form-label">House Model:</label>
                                                <span>
                                                    <select class="form-control-lg form-control text-lg" id="image-select"
                                                        name="houseModel">
                                                        
                                                        <option value="Maria Delfina" selected>Maria Delfina</option>
                                                        <option value="Maria Lorenza">Maria Lorenza</option>
                                                        <option value="Maria Marcela">Maria Marcela</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="form-group pb-0 mb-0">
                                                <label for="clientList" class="form-label">Owner:</label>

                                                <select class="form-control-lg form-control text-lg" id="clientList"
                                                    name="owner" required>
                                                    <option value="" hidden selected disabled>Choose...
                                                    </option>
                                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($clients ? $client->id : ''); ?>">
                                                            <?php echo e($clients ? $client->first_name . ' ' . $client->last_name : ''); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>


                                        </div>

                                        <div class="col-md-7 pt-2 pl-2 d-flex flex-column justify-content-between ">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span class="text-secondary text-xs">PROPERTY INFORMATION</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>


                                            <div class="mb-2 d-flex flex-column">
                                                <div class="text-center">
                                                    <span class="display-2">&#8369;</span>
                                                    <span class="display-2" id="package-price">759,000.00</span>
                                                </div>
                                                <span class="text-secondary text-center text-s mb-0">PACKAGE PRICE</span>
                                            </div>

                                            

                                            <div class="d-sm-flex">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="equity-term" class="form-label">Equity Term:</label>

                                                        <select id="equity-term" class="form-control form-control-lg"
                                                            onchange="selectEquity()" name="equityTerm" required>
                                                            <option value="" selected disabled hidden>Choose...
                                                            </option>
                                                            <option value="1">Spot Cash
                                                            </option>
                                                            <option value="6">6 Months
                                                            </option>
                                                            <option value="12">12 Months
                                                            </option>
                                                            <option value="18">18 Months
                                                            </option>
                                                            <option value="custom">Custom...
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            

                                            <div class="d-sm-flex">
                                                <div class="col-12" id="enterCustomMonths" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="customMonths" class="form-label">Enter Months:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="customMonths" name="customMonths" \>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-sm-flex">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="loanableAmount" class="form-label">Loanable
                                                            Amount:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="loanableAmount" name="loanableAmount" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="downpayment" class="form-label">Reservation
                                                            Fee:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="downpayment" name="downpayment" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="discount" class="form-label">Discount:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="discount" name="discount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex justify-content-between align-items-end">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="blkNo" class="form-label">Blk.
                                                            No:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="blkNo" name="blkNo" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="lotNo" class="form-label">Lot
                                                            No:</label>
                                                        <input type="number" class="form-control form-control-lg border "
                                                            id="lotNo" name="lotNo" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="floorArea" class="form-label">Floor
                                                            Area
                                                            (m²):</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="floorArea" name="floorArea" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class=" form-group">
                                                        <label for="titleNo" class="form-label">Title
                                                            No:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="titleNo" name="titleNo" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-sm-flex justify-content-between align-items-end mt-3">
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="processingFee" class="form-label">Processing
                                                            Fee:</label>
                                                        <input type="number" class="form-control form-control-lg border "
                                                            id="processingFee" name="processingFee" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="cornerLotFee" class="form-label">Corner
                                                            Lot
                                                            Fee:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="cornerLotFee" name="cornerLotFee" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class=" form-group">
                                                        <label for="commercialLotFee" class="form-label">Commercial
                                                            Lot Fee:</label>
                                                        <input type="number" class="form-control form-control-lg border"
                                                            id="commercialLotFee" name="commercialLotFee" required>
                                                    </div>
                                                </div>
                                            </div>


                                            


                                            <button type="submit" class="btn btn-success w-100 btn-lg px-5">
                                                <span>Place Reservation</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        // FOR HOUSE MODEL SELECT
        const imageSelect = document.getElementById("image-select");
        const selectedImage = document.getElementById("selected-image");
        const houseModel = document.getElementById("house-model");
        const packagePrice = document.getElementById("package-price");

        function selectEquity() {
            var equityTerm = document.getElementById("equity-term").value;
            var customMonths = document.getElementById("enterCustomMonths")

            if (equityTerm === "custom") {
                customMonths.setAttribute("required", "true");
                customMonths.style.display = "block";
            } else {
                customMonths.removeAttribute("required");
                customMonths.style.display = "none";
            }
        }

        const modelImages = [
            // 'maria-delfina.png',
            // 'maria-lorenza.png',
            // 'maria-marcela.png'
            "<?php echo e(asset('images/housemodels/delfina/maria_delfina.png')); ?>",
            "<?php echo e(asset('images/housemodels/lorenza/maria_lorenza.png')); ?>",
            "<?php echo e(asset('images/housemodels/marcela/maria_marcela.png')); ?>"
        ];

        const modelNames = [
            'Maria Delfina',
            'Maria Lorenza',
            'Maria Marcela'
        ];

        const modelPrices = [
            '759,000.00',
            '2,000,000.00',
            '2,500,000.00'
        ];

        imageSelect.addEventListener("change", function() {
            const selectedIndex = imageSelect.selectedIndex;
            // const selectedOption = imageSelect.options[selectedIndex];
            // selectedImage.src = "<?php echo e(asset('images/housemodels')); ?>/" + imageSelect.value;
            selectedImage.src = modelImages[selectedIndex];
            houseModel.textContent = modelNames[selectedIndex];
            packagePrice.textContent = modelPrices[selectedIndex];
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/reservations/hdmf-loan/create.blade.php ENDPATH**/ ?>