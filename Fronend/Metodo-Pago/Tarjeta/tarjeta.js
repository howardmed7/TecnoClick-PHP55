document.getElementById('payment-form').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevenir que se recargue la página al hacer submit
    
    // Obtener valores de los campos
    const cardName = document.getElementById('card-name').value;
    const cardNumber = document.getElementById('card-number').value;
    const expiryDate = document.getElementById('expiry-date').value;
    const cvv = document.getElementById('cvv').value;
    
    // Validación básica
    if (!cardName || !cardNumber || !expiryDate || !cvv) {
      alert("Por favor, complete todos los campos.");
      return;
    }
  
    // Simulación de un proceso de pago
    const paymentStatus = document.getElementById('payment-status');
    paymentStatus.textContent = "Procesando el pago...";
    paymentStatus.style.color = "orange";
  
    setTimeout(function() {
      // Simulación de respuesta de pago exitoso
      const isPaymentSuccessful = Math.random() > 0.2;  // 80% de éxito
  
      if (isPaymentSuccessful) {
        paymentStatus.textContent = "¡Pago realizado con éxito!";
        paymentStatus.style.color = "green";
      } else {
        paymentStatus.textContent = "Hubo un error en el pago. Intenta de nuevo.";
        paymentStatus.style.color = "red";
      }
    }, 2000);  // Simula el tiempo de procesamiento de 2 segundos
  });
  