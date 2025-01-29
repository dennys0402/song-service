
## 🚀 Instalación y Ejecución

### **1. Clonar el Repositorio**
Clona este repositorio en tu máquina local:

```sh
git clone https://github.com/dennys0402/song-service.git
cd song-service
```

### **2. Construir la Imagen Docker**
Ejecuta el siguiente comando para construir la imagen:

```sh
docker build -t miapp:latest .
```

### **3. Iniciar el Contenedor**
Para ejecutar la aplicación, usa:

```sh
docker run -it -p 9000:8000 miapp
```

La aplicación estará disponible en [http://localhost:9000](http://localhost:9000).

---
