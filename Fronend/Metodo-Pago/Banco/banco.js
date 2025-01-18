document.getElementById('payment-form').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevenir que se recargue la página al hacer submit
  
    // Obtener los valores del formulario
    const fullName = document.getElementById('full-name').value;
    const bankSelection = document.getElementById('bank-selection').value;
  
    // Validación básica
    if (!fullName || !bankSelection) {
      alert("Por favor, completa todos los campos.");
      return;
    }
  
    // Simulación de la visualización de la información de pago
    document.getElementById('payment-info').style.display = 'block';
    document.getElementById('bank-name').textContent = getBankName(bankSelection);
  
    // Actualización del estado del pago
    const paymentStatus = document.getElementById('payment-status');
    paymentStatus.textContent = "Por favor, realiza la transferencia utilizando los datos proporcionados.";
    paymentStatus.style.color = "blue";
  });
  
  document.getElementById('confirm-payment').addEventListener('click', function() {
    const paymentStatus = document.getElementById('payment-status');
  
    // Simulación de confirmación de pago
    paymentStatus.textContent = "Pago confirmado. ¡Gracias por tu compra!";
    paymentStatus.style.color = "green";
  });
  
  function getBankName(bankCode) {
    switch (bankCode) {
      case 'bbva':
        return 'BBVA';
      case 'santander':
        return 'Santander';
      case 'caixabank':
        return 'CaixaBank';
      case 'bankia':
        return 'Bankia';
      default:
        return 'Banco';
    }
  }
  