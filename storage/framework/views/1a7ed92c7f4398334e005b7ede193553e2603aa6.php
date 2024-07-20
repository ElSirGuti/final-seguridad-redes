<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<?php if (\Illuminate\Support\Facades\Blade::check('role', 'usuario')): ?>
<h4>Definiciones Básicas</h4>

<p><b>Auditorías:</b>

Una auditoría es un examen completo e independiente de una organización, sistema o proceso para evaluar su eficacia, riesgos o cumplimiento de normas específicas. Las auditorías de seguridad de TI se realizan para identificar y evaluar vulnerabilidades en los sistemas informáticos, redes y datos. Estas auditorías pueden ser realizadas por auditores internos o externos y suelen implicar una combinación de pruebas, entrevistas y análisis de registros.
<br><br>
<b>Análisis de seguridad de redes:</b>

El análisis de seguridad de redes es el proceso de identificar, evaluar y mitigar las vulnerabilidades en una red informática. Esto implica el uso de una variedad de herramientas y técnicas para escanear redes, identificar puntos débiles y evaluar el riesgo potencial de cada vulnerabilidad. Los análisis de seguridad de redes pueden ser realizados de forma manual o automática, y se pueden realizar de forma regular para identificar nuevas amenazas y vulnerabilidades.
<br><br>
<b>Análisis forense:</b>

El análisis forense es la aplicación de métodos científicos y técnicas de investigación para recopilar, preservar y analizar evidencia digital en caso de un incidente cibernético o delito informático. El objetivo del análisis forense es identificar a los autores del delito, determinar el alcance del daño y reunir pruebas para su uso en un proceso judicial. Los analistas forenses utilizan una variedad de herramientas y técnicas para extraer datos de dispositivos digitales, analizar registros y reconstruir eventos.
<br><br>
<b>SSL:</b>

SSL (Secure Sockets Layer) es un protocolo de seguridad que se utiliza para cifrar las comunicaciones entre un servidor web y un navegador web. Esto ayuda a proteger los datos confidenciales, como la información de las tarjetas de crédito y los datos de inicio de sesión, de que sean interceptados por terceros. SSL ha sido reemplazado en gran medida por su sucesor, TLS (Transport Layer Security), pero el término SSL todavía se utiliza comúnmente.
<br><br>
<b>Acceso remoto:</b>

El acceso remoto es la capacidad de acceder a una computadora o red desde una ubicación diferente. Esto se puede hacer utilizando una variedad de tecnologías, incluyendo VPN, escritorios remotos y acceso web remoto. El acceso remoto permite a los empleados trabajar desde casa, a los administradores de TI acceder a los sistemas de forma remota y a los usuarios acceder a sus archivos y aplicaciones desde cualquier lugar.
<br><br>
<b>VPN:</b>

VPN (Virtual Private Network) es una red privada que se crea sobre una red pública, como Internet. Las VPN se utilizan para cifrar el tráfico de Internet y proteger la confidencialidad de los datos. Esto hace que las VPN sean una herramienta popular para las personas que trabajan de forma remota, utilizan redes Wi-Fi públicas o acceden a información confidencial.

</p>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>
<h4>Usuarios Registrados</h4>
<div>
    <p>No habia presupuesto para la tabla</p>
</div>
<?php endif; ?>

<h4>Este es el fin.</h4>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-init\resources\views/content/pages/pages-home.blade.php ENDPATH**/ ?>