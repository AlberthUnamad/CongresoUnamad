<main class="registro" style="margin: 50px 0;">
    <h2 class="registro__encabezado"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>

    <div class="paquetes__grid">
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Gratis</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a CongresoUnamad</li>
            </ul>

            <p class="paquete__precio">S/.0</p>

            <form method="POST" action="/finalizar-registro/gratis">
                <input class="paquetes__submit" type="submit" value="Inscripción Gratis">
            </form>
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Presencial</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Presencial a CongresoUnamad</li>
                <li class="paquete__elemento">Pase por 2 días</li>
                <li class="paquete__elemento">Acceso a talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las grabaciones</li>
                <li class="paquete__elemento">Camisa del Evento</li>
                <li class="paquete__elemento">Comida y Bebida</li>
            </ul>

            <p class="paquete__precio">S/.50</p>

            
            <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>

            
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Virtual</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a CongresoUnamad</li>
                <li class="paquete__elemento">Pase por 2 días</li>
                <li class="paquete__elemento">Acceso a talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las grabaciones</li>
            </ul>

            <p class="paquete__precio">S/.30</p>

            <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container-virtual"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Reemplazar CLIENT_ID por tu client id proporcionado al crear la app desde el developer dashboard) -->
<script src="https://www.paypal.com/sdk/js?client-id=AW5YLGz2zAktZ8Zp9vmUHcxrXrjje1yk11xq-J8K3kqHTzHYgvyla_yqodftVO-2mfQ1X4qd1hVxfUP7&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'pay',
        },

        createOrder: function(data, actions) {
            return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":13.30}}]
            });
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {

                const datos = new FormData();
                datos.append('paquete_id', orderData.purchase_units[0].description);
                datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                fetch('/finalizar-registro/pagar', {
                    method: 'POST',
                    body: datos
                })
                .then( respuesta => respuesta.json())
                .then(resultado => {
                    if(resultado.resultado) {
                        actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                    }
                })
            
            
            });
        },

        onError: function(err) {
            console.log(err);
        }
        }).render('#paypal-button-container');
    
        // Pase virtual
        paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'pay',
        },

        createOrder: function(data, actions) {
            return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":8}}]
            });
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {

                const datos = new FormData();
                datos.append('paquete_id', orderData.purchase_units[0].description);
                datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                fetch('/finalizar-registro/pagar', {
                    method: 'POST',
                    body: datos
                })
                .then( respuesta => respuesta.json())
                .then(resultado => {
                    if(resultado.resultado) {
                        actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                    }
                })
                
            });
        },

        onError: function(err) {
            console.log(err);
        }
        }).render('#paypal-button-container-virtual');

    }
    initPayPalButton();
</script>