<!-- Example -->
<div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Heading -->
        <h2 class="font-weight-bold text-center mb-1" id="modalPaymentTitle">
          Add Payment
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
          Simplify your workflow in minutes.
        </p>

        <!-- Form -->
        <form>

          <!-- Name -->
          <div class="form-group">
            <label for="modalPaymentName">Name on card</label>
            <input class="form-control" id="modalPaymentName" type="text" placeholder="First Last">
          </div>

          <!-- Name -->
          <div class="form-group">
            <label for="modalPaymentNumbber">Card number</label>
            <input class="form-control" id="modalPaymentNumbber" type="number" placeholder="4242 4242 4242 4242">
          </div>

          <!-- Name -->
          <div class="form-group">
            <label for="modalPaymentDate">Exp. Date</label>
            <input class="form-control" id="modalPaymentDate" type="text" placeholder="03/2023">
          </div>

          <!-- Submit -->
          <button class="btn btn-block btn-primary mt-3 lift">
            Add Payment Method
          </button>

        </form>

      </div>
    </div>
  </div>
</div>
