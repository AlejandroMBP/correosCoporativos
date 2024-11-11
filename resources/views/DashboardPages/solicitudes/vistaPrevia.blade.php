<div class="modal fade" id="modalVistaDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVistaDatosTitle">Datos del solicitante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="{{ route('dashboard.solicitud.correoCorporativo') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col mb-6">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control no-select" id="username"
                                placeholder="Ingresa tu nombre de usuario" readonly>
                        </div>
                        <div class="col mb-6">
                            <label for="carnet" class="form-label">carnet</label>
                            <input type="text" class="form-control no-select" id="carnet"
                                placeholder="Ingresa tu carnet" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control no-select" id="nombre"
                            placeholder="Ingresa tu nombre " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control no-select" id="email"
                            placeholder="Ingresa tu correo" readonly>
                    </div>
                    <div class="row mb-3">

                        <div class="col mb-6">
                            <label for="phone" class="form-label">Celular</label>
                            <input type="text" class="form-control no-select" id="phone"
                                placeholder="Ingresa tu número de celular" readonly>
                        </div>

                        <div class="col mb-6">
                            <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control no-select" id="fechaNacimiento" readonly>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="emailCorporativo" class="form-label">Correo corporativo</label>
                        <input type="email" class="form-control" id="emailCorporativo"
                            placeholder="Correo@.upea.edu.bo">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">enviar correo</button>
            </div>
        </div>
    </div>
</div>
<style>
    .no-select {
        background-color: #e9ecef;
        color: #6c757d;
        cursor: not-allowed;
        user-select: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const noSelectFields = document.querySelectorAll('.no-select');
        noSelectFields.forEach((field => {
            field.addEventListener('mousedown', function(e) {
                e.preventDefault();
            });
        }));
    });
</script>
