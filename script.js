const contenedorProductos = document.querySelector("#productos");
const contenedorCarrito = document.querySelector("#carrito");

const productos = [
  { id: 1, nombre: "Hamburguesa", precio: 8000 },
  { id: 2, nombre: "Lomito completo", precio: 12000 },
  { id: 3, nombre: "Pizza épica", precio: 10500 },
];

const carrito = [];

productos.forEach((producto) => {
  const div = document.createElement("div");

  const nombre = document.createElement("p");
  nombre.textContent = `${producto.nombre} - $${producto.precio}`;

  const boton = document.createElement("button");
  boton.textContent = "Agregar al carrito";

  boton.addEventListener("click", () => {
    carrito.push(producto);

    mostrarCarrito();
  });

  div.appendChild(nombre);
  div.appendChild(boton);

  contenedorProductos.appendChild(div);
});

function mostrarCarrito() {
  contenedorCarrito.innerHTML = "";

  carrito.forEach((producto) => {
    const p = document.createElement("p");

    p.textContent = `${producto.nombre} - $${producto.precio}`;

    contenedorCarrito.appendChild(p);
  });
}