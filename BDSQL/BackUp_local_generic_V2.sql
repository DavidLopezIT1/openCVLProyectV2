-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 10:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_generic`
--

-- --------------------------------------------------------

--
-- Table structure for table `siaacuerdos`
--

CREATE TABLE `siaacuerdos` (
  `codigoacuerdo` int(4) NOT NULL,
  `descacuerdo` varchar(100) DEFAULT NULL,
  `paises` varchar(12) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaadministracion`
--

CREATE TABLE `siaadministracion` (
  `codigoadministracion` int(3) NOT NULL,
  `descadministracion` varchar(80) DEFAULT NULL,
  `sucursalagencia` varchar(25) DEFAULT NULL,
  `cscDAV` int(4) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siacondiciontrans`
--

CREATE TABLE `siacondiciontrans` (
  `codigocondiciontrans` int(5) NOT NULL,
  `nitimportador` bigint(20) DEFAULT NULL,
  `nombreimportador` varchar(100) DEFAULT NULL,
  `codigoproveedor` varchar(80) DEFAULT NULL,
  `nombreproveedor` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siadeclarante`
--

CREATE TABLE `siadeclarante` (
  `tipodocumento` varchar(10) DEFAULT NULL,
  `codigodocdeclarante` bigint(20) NOT NULL,
  `nombrecompletodeclarante` varchar(100) DEFAULT NULL,
  `codigodeclarante` varchar(8) DEFAULT NULL,
  `tipodocagenciadeclarante` varchar(12) DEFAULT NULL,
  `nitagenciadeclarante` bigint(20) DEFAULT NULL,
  `CodigoOEAdeclarante` varchar(8) DEFAULT NULL,
  `direcciondeclarante` varchar(80) DEFAULT NULL,
  `codigotipousuarioaa` int(3) DEFAULT NULL,
  `desctipousuarioaa` varchar(50) DEFAULT NULL,
  `codigodptodeclaranteaa` int(4) DEFAULT NULL,
  `descdptodeclaranteaa` varchar(25) DEFAULT NULL,
  `codigocdaddeclaranteaa` int(4) DEFAULT NULL,
  `desccdaddeclaranteaa` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `representantelegal` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siadeposito`
--

CREATE TABLE `siadeposito` (
  `codigodeposito` int(5) NOT NULL,
  `descdeposito` varchar(50) DEFAULT NULL,
  `departamento` varchar(25) DEFAULT NULL,
  `ciudadomunicipio` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `depositoZFr` varchar(2) DEFAULT NULL,
  `ccrepresentante` bigint(20) DEFAULT NULL,
  `nombresrepresentante` varchar(60) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siadescriptores`
--

CREATE TABLE `siadescriptores` (
  `idcapitulo` int(2) NOT NULL,
  `desccapitulo` varchar(35) DEFAULT NULL,
  `iddescriptor` int(4) DEFAULT NULL,
  `descdescriptor` varchar(50) DEFAULT NULL,
  `nivel` varchar(20) DEFAULT NULL,
  `subpartida` bigint(20) DEFAULT NULL,
  `fechavigenciadesc` date DEFAULT NULL,
  `fechavigenciadeschasta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaembalaje`
--

CREATE TABLE `siaembalaje` (
  `codigoembalaje` varchar(3) NOT NULL,
  `descembalaje` varchar(30) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaformaenviodav`
--

CREATE TABLE `siaformaenviodav` (
  `codigoformaenvio` int(3) NOT NULL,
  `descformaenvio` varchar(30) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaformapago`
--

CREATE TABLE `siaformapago` (
  `codigoformapago` int(3) NOT NULL,
  `descformapago` varchar(50) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaimportador`
--

CREATE TABLE `siaimportador` (
  `nit` bigint(20) NOT NULL,
  `tipodocumento` varchar(20) DEFAULT NULL,
  `razonsocial` varchar(70) DEFAULT NULL,
  `nivelcomercialcod` int(2) DEFAULT NULL,
  `nivelcomercialdesc` varchar(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `correoelectronico` varchar(50) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `depto` varchar(30) DEFAULT NULL,
  `administracionmercancia` varchar(30) DEFAULT NULL,
  `CodigoOEA` varchar(8) DEFAULT NULL,
  `actividadeconomicacod` bigint(20) DEFAULT NULL,
  `actividadeconomicadesc` varchar(60) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaincoterm`
--

CREATE TABLE `siaincoterm` (
  `codincoterm` varchar(3) NOT NULL,
  `incotermdesc` varchar(100) DEFAULT NULL,
  `lugarentrega` varchar(100) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siamodalidad`
--

CREATE TABLE `siamodalidad` (
  `codigomodalidad` varchar(5) NOT NULL,
  `descmodalidad` varchar(150) DEFAULT NULL,
  `zonafranca` varchar(2) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siamodotransporte`
--

CREATE TABLE `siamodotransporte` (
  `codigomodtransporte` int(4) NOT NULL,
  `descmodtransporte` varchar(50) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siamoneda`
--

CREATE TABLE `siamoneda` (
  `codigomoneda` varchar(5) NOT NULL,
  `descmoneda` varchar(30) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sianaturalezatrans`
--

CREATE TABLE `sianaturalezatrans` (
  `codigonaturaleza` int(2) NOT NULL,
  `descnaturaleza` varchar(40) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sianivelcomercial`
--

CREATE TABLE `sianivelcomercial` (
  `codigonivelcomercial` int(1) NOT NULL,
  `descnivelcomercial` varchar(25) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaoficinaincomex`
--

CREATE TABLE `siaoficinaincomex` (
  `codigoficinaincomex` int(2) NOT NULL,
  `descoficinaincomex` varchar(25) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siapais`
--

CREATE TABLE `siapais` (
  `codigopais` int(6) NOT NULL,
  `numeropais` int(6) DEFAULT NULL,
  `descpais` varchar(30) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaparamgeneral`
--

CREATE TABLE `siaparamgeneral` (
  `codigovariable` varchar(120) NOT NULL,
  `valorvariable` varchar(10) DEFAULT NULL,
  `descripcionvariable` varchar(225) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `ejemplo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaprductos`
--

CREATE TABLE `siaprductos` (
  `codproducto` varchar(80) NOT NULL,
  `cliente` bigint(20) DEFAULT NULL,
  `nombrecliente` varchar(80) DEFAULT NULL,
  `codigoproveedor` varchar(60) DEFAULT NULL,
  `nombreproveedor` varchar(80) DEFAULT NULL,
  `subpartida` bigint(20) DEFAULT NULL,
  `unidadcomercial` varchar(20) DEFAULT NULL,
  `descripcionarancelaria` varchar(255) DEFAULT NULL,
  `descripcionsegunfactura` varchar(255) DEFAULT NULL,
  `descripcioninicialitem` varchar(255) DEFAULT NULL,
  `descripcionfinalitem` varchar(255) DEFAULT NULL,
  `nombrecomercial` varchar(255) DEFAULT NULL,
  `marcacomercial` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `nombretecnico` varchar(255) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaproveedor`
--

CREATE TABLE `siaproveedor` (
  `codigoproveedor` varchar(60) NOT NULL,
  `nombreproveedor` varchar(80) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `cuidad` varchar(20) DEFAULT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `condicionproveedor` varchar(20) DEFAULT NULL,
  `especifique` varchar(70) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siasubpartidas`
--

CREATE TABLE `siasubpartidas` (
  `codigosubpartida` bigint(20) NOT NULL,
  `descsubpartida` varchar(255) DEFAULT NULL,
  `porcentajearancelsubpartida` int(2) DEFAULT NULL,
  `porcentajeivasubpartida` int(2) DEFAULT NULL,
  `unidadcomercial` varchar(2) DEFAULT NULL,
  `descripcionarancelaria` varchar(255) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siasucursal`
--

CREATE TABLE `siasucursal` (
  `codigosucursal` varchar(3) NOT NULL,
  `descsucursal` varchar(25) DEFAULT NULL,
  `cscDOimpo` int(9) DEFAULT NULL,
  `cscDOexpo` int(9) DEFAULT NULL,
  `codigoadministracion` int(2) DEFAULT NULL,
  `descadministracion` varchar(20) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siatasadecambio`
--

CREATE TABLE `siatasadecambio` (
  `idtmoneda` int(4) NOT NULL,
  `descmoneda` varchar(50) DEFAULT NULL,
  `aniotasa` int(5) DEFAULT NULL,
  `semanatasa` int(5) DEFAULT NULL,
  `valortasadecambio` bigint(20) DEFAULT NULL,
  `fechatasa` date DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siatipodim`
--

CREATE TABLE `siatipodim` (
  `codigotipodim` int(2) NOT NULL,
  `desctipodim` varchar(10) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siatransportador`
--

CREATE TABLE `siatransportador` (
  `codigotransportador` int(6) NOT NULL,
  `desctransportador` varchar(80) DEFAULT NULL,
  `paisprocedencia` varchar(4) DEFAULT NULL,
  `paisprocedenciadescripcion` varchar(30) DEFAULT NULL,
  `idsucursal` int(4) DEFAULT NULL,
  `descsucursal` varchar(50) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siaunidadcomercial`
--

CREATE TABLE `siaunidadcomercial` (
  `codigounidadcom` varchar(4) NOT NULL,
  `descunidadcom` varchar(25) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(4) DEFAULT NULL,
  `login` bigint(20) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(25) DEFAULT NULL,
  `correoelect` varchar(50) DEFAULT NULL,
  `nrotel` bigint(10) DEFAULT NULL,
  `direccion` varchar(35) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `login`, `user_name`, `user_password`, `correoelect`, `nrotel`, `direccion`, `estado`) VALUES
(NULL, 1001287656, 'David L', 'Juana101453/*ssh&32', 'santyfcw@gmail.com', 3012386736, 'Cra 7 c # 3-98', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siaacuerdos`
--
ALTER TABLE `siaacuerdos`
  ADD PRIMARY KEY (`codigoacuerdo`);

--
-- Indexes for table `siaadministracion`
--
ALTER TABLE `siaadministracion`
  ADD PRIMARY KEY (`codigoadministracion`);

--
-- Indexes for table `siacondiciontrans`
--
ALTER TABLE `siacondiciontrans`
  ADD PRIMARY KEY (`codigocondiciontrans`);

--
-- Indexes for table `siadeclarante`
--
ALTER TABLE `siadeclarante`
  ADD PRIMARY KEY (`codigodocdeclarante`);

--
-- Indexes for table `siadeposito`
--
ALTER TABLE `siadeposito`
  ADD PRIMARY KEY (`codigodeposito`);

--
-- Indexes for table `siadescriptores`
--
ALTER TABLE `siadescriptores`
  ADD PRIMARY KEY (`idcapitulo`);

--
-- Indexes for table `siaembalaje`
--
ALTER TABLE `siaembalaje`
  ADD PRIMARY KEY (`codigoembalaje`);

--
-- Indexes for table `siaformaenviodav`
--
ALTER TABLE `siaformaenviodav`
  ADD PRIMARY KEY (`codigoformaenvio`);

--
-- Indexes for table `siaformapago`
--
ALTER TABLE `siaformapago`
  ADD PRIMARY KEY (`codigoformapago`);

--
-- Indexes for table `siaimportador`
--
ALTER TABLE `siaimportador`
  ADD PRIMARY KEY (`nit`);

--
-- Indexes for table `siaincoterm`
--
ALTER TABLE `siaincoterm`
  ADD PRIMARY KEY (`codincoterm`);

--
-- Indexes for table `siamodalidad`
--
ALTER TABLE `siamodalidad`
  ADD PRIMARY KEY (`codigomodalidad`);

--
-- Indexes for table `siamodotransporte`
--
ALTER TABLE `siamodotransporte`
  ADD PRIMARY KEY (`codigomodtransporte`);

--
-- Indexes for table `siamoneda`
--
ALTER TABLE `siamoneda`
  ADD PRIMARY KEY (`codigomoneda`);

--
-- Indexes for table `sianaturalezatrans`
--
ALTER TABLE `sianaturalezatrans`
  ADD PRIMARY KEY (`codigonaturaleza`);

--
-- Indexes for table `sianivelcomercial`
--
ALTER TABLE `sianivelcomercial`
  ADD PRIMARY KEY (`codigonivelcomercial`);

--
-- Indexes for table `siaoficinaincomex`
--
ALTER TABLE `siaoficinaincomex`
  ADD PRIMARY KEY (`codigoficinaincomex`);

--
-- Indexes for table `siapais`
--
ALTER TABLE `siapais`
  ADD PRIMARY KEY (`codigopais`);

--
-- Indexes for table `siaparamgeneral`
--
ALTER TABLE `siaparamgeneral`
  ADD PRIMARY KEY (`codigovariable`);

--
-- Indexes for table `siaprductos`
--
ALTER TABLE `siaprductos`
  ADD PRIMARY KEY (`codproducto`);

--
-- Indexes for table `siaproveedor`
--
ALTER TABLE `siaproveedor`
  ADD PRIMARY KEY (`codigoproveedor`);

--
-- Indexes for table `siasubpartidas`
--
ALTER TABLE `siasubpartidas`
  ADD PRIMARY KEY (`codigosubpartida`);

--
-- Indexes for table `siasucursal`
--
ALTER TABLE `siasucursal`
  ADD PRIMARY KEY (`codigosucursal`);

--
-- Indexes for table `siatasadecambio`
--
ALTER TABLE `siatasadecambio`
  ADD PRIMARY KEY (`idtmoneda`);

--
-- Indexes for table `siatipodim`
--
ALTER TABLE `siatipodim`
  ADD PRIMARY KEY (`codigotipodim`);

--
-- Indexes for table `siatransportador`
--
ALTER TABLE `siatransportador`
  ADD PRIMARY KEY (`codigotransportador`);

--
-- Indexes for table `siaunidadcomercial`
--
ALTER TABLE `siaunidadcomercial`
  ADD PRIMARY KEY (`codigounidadcom`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siadescriptores`
--
ALTER TABLE `siadescriptores`
  MODIFY `idcapitulo` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siamodotransporte`
--
ALTER TABLE `siamodotransporte`
  MODIFY `codigomodtransporte` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siaoficinaincomex`
--
ALTER TABLE `siaoficinaincomex`
  MODIFY `codigoficinaincomex` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siatasadecambio`
--
ALTER TABLE `siatasadecambio`
  MODIFY `idtmoneda` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siatipodim`
--
ALTER TABLE `siatipodim`
  MODIFY `codigotipodim` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
