class menu{
    constructor(nombre, cantidad){
        this.nombre=cantidad
        this.cantidad=cantidad
    }
    verdatos(){
        return `${this.nombre} ${this.cantidad}`
    }

}

class Pedido {
    constructor(cliente, productos, estado) {
      this.cliente = cliente;
      this.productos = productos;
      this.estado = "En cocina";
    }
    verdatos(){
        return `${this.cliente} ${this.productos} ${this.estado}`
    }
    
  }

  function pedidoIM() {
    const clienteNombre = document.getElementById("clienteNombre").value;
    const producto1Cantidad = document.getElementById("cantidad").value;
    const producto2Cantidad = document.getElementById("cantidad1").value;
  
    if (!clienteNombre || !producto1Cantidad || !producto2Cantidad) {
      alert("Por favor, ingresa todos los datos");
      return;
    }
  
    const producto1Seleccionado = document.getElementById("primera").value;
    const producto2Seleccionado = document.getElementById("primere").value;
  
    const mensaje1 = `Cliente: ${clienteNombre}\nProducto 1: ${producto1Seleccionado}\nCantidad: ${producto1Cantidad}`;
    const mensaje2 = `bebida: ${producto2Seleccionado}\nCantidad: ${producto2Cantidad}`;
  
    alert(mensaje1);
    alert(mensaje2);
  }
  