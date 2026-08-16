const lista = document.querySelector("#lista");
const caja = document.querySelector(".caja");
const boton = document.querySelector("#boton");
const productos = [
  { nombre: "Hamburguesa", precio: 8000 },
  { nombre: "Lomito completo", precio: 12000 },
  { nombre: "Pizza epica", precio: 10500 },
];

function meter() {
  productos.forEach((producto) => {
    const parrafo = document.createElement("p");
    parrafo.textContent = `${producto.nombre} - ${producto.precio}`;

    lista.appendChild(parrafo);
  });
}

const parrafo = document.createElement("p");

parrafo.textContent = "chupame la pija";

boton.addEventListener("click", () => {
  caja.appendChild(parrafo);
});
