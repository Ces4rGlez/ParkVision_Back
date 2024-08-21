   <div class="modal fade" id="modalFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h2 class="modal-title fs-5" id="exampleModalLabel" style="width: 100% !important; text-align: center; font-family: 'Quicky Story'; color: #851C1C ;">
                       Crear Ticket
                   </h2>
               </div>
               <form action="funciones.php" method="post" autocomplete="off">
                   <input type="hidden" name="accion" value="crearFacturaCliente">
                   <input type="hidden" name="idReserva" id="idReserva">
                   <input type="text" name="deuda" id="deuda" hidden>
                   <input type="hidden" name="emailCliente" id="emailCliente">
                   <div class="modal-body">
                       <div class="col-md-12 mb-2 clienteModal"></div>
                       <div class="form-floating mb-2">
                           <label for="formato_pago">Formato de Pago</label>
                           <?php
                            $tiposDePago = array(
                                "Transferencia Bancaria",
                                "Tarjeta Bancaria",
                                "Pago con Tarjeta de Crédito/Débito",
                                "Efectivo"
                            ); ?>
                           <select name="formato_pago" class="form-control form-control-lg" required>
                               <option value="" selected="">Seleccione</option>
                               <?php
                                foreach ($tiposDePago as $tipo) {
                                    echo "<option value=\"$tipo\">$tipo</option>";
                                } ?>
                           </select>
                       </div>

                       <div class="form-floating mb-2">
                           <label for="servicios_extras">Exceso de Días </label>
                           <textarea class="form-control" name="servicios_extras" id="servicios_extras"></textarea>
                       </div>
                       <div class="mb-3">
                           <label for="total_gasto_extras" class="form-label">
                               Total gasto por el exceso de días $
                               </label>
                           <input type="text" name="total_gasto_extras" id="total_gasto_extras" oninput="formatCurrency(event)" class="form-control" value="0">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                       <button type="submit" class="btn btn-primary">Crear Ticket</button>
                   </div>
               </form>
           </div>
       </div>
   </div>