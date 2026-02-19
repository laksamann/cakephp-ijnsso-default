<div class="d-flex flex-column flex-lg-row flex-column-fluid">

    <!-- Aside -->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
         style="background: aliceblue;">
        <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
            <img
                src="/assets/media/logos/default.svg"
                class="mb-10 img-fluid"
                alt="Logo"
                style="max-width: 50%;"
            />
        </div>
    </div>

    <!-- Content -->
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="w-lg-500px p-10">

                <?php echo $this->Form->create(null, [
                        'class' => 'form w-100',
                        'id'    => 'kt_sign_in_form',
                ]) ?>

                <?php echo $this->Flash->render() ?>
                
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                    <div class="text-gray-500 fw-semibold fs-6">
                        Enter your IJN credentials
                    </div>
                </div>

                <div class="fv-row mb-8"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Using IJN AD credentials (same as PC / Trakcare / IJNPulse login)">
                    <?php echo $this->Form->control('email', [
                            'label'       => false,
                            'type'        => 'text',
                            'class'       => 'form-control bg-transparent',
                            'placeholder' => 'Username',
                            'required'    => true,
                    ]) ?>
                </div>

                <div class="fv-row mb-3"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Using IJN AD credentials (same as PC / Trakcare / IJNPulse login)">
                    <?php echo $this->Form->control('password', [
                            'label'       => false,
                            'class'       => 'form-control bg-transparent',
                            'placeholder' => 'Password',
                            'required'    => true,
                    ]) ?>
                </div>

                <div class="d-grid mb-10">
                    <?php echo $this->Form->button('Sign In', [
                            'class' => 'btn btn-primary',
                    ]) ?>
                </div>

                <?php echo $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>
