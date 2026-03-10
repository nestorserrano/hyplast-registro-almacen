# Hyplast Registro de Almacén - Lectura con Teléfono

## Descripción
Sistema de registro de almacén con lectura de códigos de barras usando la cámara del teléfono móvil, para registrar entradas, salidas y movimientos de inventario.

## Características Principales
- 📱 Lectura con cámara del móvil
- 📦 Registro de entradas/salidas
- 🔄 Movimientos de inventario
- 📊 Consulta de ubicaciones
- 🏢 Gestión de bodegas
- ⚡ Modo offline
- 📈 Reportes en tiempo real

## Funcionalidades
- Escanear códigos de barras con móvil
- Registrar recepciones de material
- Despachos de producto
- Transferencias entre bodegas
- Consultar existencias
- Actualizar ubicaciones
- Historial de movimientos

## Modelos Principales
- **Storage**: Almacenamiento/Ubicaciones
- **Transfer**: Transferencias
- **TransferDetail**: Detalle de transferencias
- **Bodega**: Bodegas

## API Endpoints
```
POST   /api/warehouse/scan         # Escanear código
POST   /api/warehouse/receive      # Registrar entrada
POST   /api/warehouse/dispatch     # Registrar salida
POST   /api/warehouse/transfer     # Transferir
GET    /api/warehouse/locations    # Consultar ubicaciones
GET    /api/warehouse/history      # Historial
```

## Tecnologías Móviles
- Progressive Web App (PWA)
- QuaggaJS para lectura de códigos
- Service Workers para modo offline
- LocalStorage para caché

## Tipos de Movimientos
- Entrada por compra
- Entrada por producción
- Salida por venta
- Transferencia entre bodegas
- Ajuste de inventario

## Formato de Códigos
Soporta múltiples formatos:
- Code 128
- Code 39
- EAN-13
- QR Code

## Requisitos
- PHP >= 8.1
- Laravel >= 10.x
- Navegador con soporte de cámara

## Instalación
```bash
composer install
npm install
npm run build
php artisan migrate
```

## Acceso Móvil
```
https://hyplast.com/warehouse/mobile
```

## Uso
1. Abrir app en el móvil
2. Permitir acceso a la cámara
3. Apuntar a código de barras
4. Confirmar lectura
5. Registrar movimiento

## Licencia
Propietario - Hyplast © 2026
