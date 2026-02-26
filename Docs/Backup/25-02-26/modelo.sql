CREATE TABLE `agricultural_operators` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agricultural_years`
--

CREATE TABLE `agricultural_years` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `agricultural_years`
--

INSERT INTO `agricultural_years` (`id`, `name`, `opening_date`, `closing_date`, `status`, `created_at`, `updated_at`) VALUES
('019c9028-3c8f-720e-a6ec-3df31a5b52ad', 'ANO AGRÍCOLA 25/26', '2025-05-01', '2026-04-30', 'A', '2026-02-24 14:58:01', '2026-02-24 14:58:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bank_suppliers`
--

CREATE TABLE `bank_suppliers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pix_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'C',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `bank_suppliers`
--

INSERT INTO `bank_suppliers` (`id`, `supplier_id`, `supplier_name`, `bank_name`, `agency_number`, `account_number`, `operation_number`, `pix_key`, `account_type`, `status`, `created_at`, `updated_at`) VALUES
('019c95e4-f96a-72be-a829-36b1176c4d8c', '019c95e4-f969-73e6-be38-a17bc7aab969', 'FAVORECIDO 01', 'BANCO 01', 'AGENCIA 01', 'CONTA 01', 'OP 01', 'PIX 01', 'P', 'A', '2026-02-25 17:42:17', '2026-02-25 17:42:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `closing_releases`
--

CREATE TABLE `closing_releases` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `initial_closing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_closing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_entries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruler` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `crops`
--

CREATE TABLE `crops` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agricultural_year_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `crops`
--

INSERT INTO `crops` (`id`, `agricultural_year_id`, `name`, `opening_date`, `closing_date`, `status`, `created_at`, `updated_at`) VALUES
('019c9028-b5dc-7288-a0ee-b802494d63b8', '019c9028-3c8f-720e-a6ec-3df31a5b52ad', 'SAFRA 25/26', '2025-11-03', '2026-04-15', 'A', '2026-02-24 14:58:33', '2026-02-24 14:58:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `crop_culture`
--

CREATE TABLE `crop_culture` (
  `crop_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `crop_culture`
--

INSERT INTO `crop_culture` (`crop_id`, `culture_id`) VALUES
('019c9028-b5dc-7288-a0ee-b802494d63b8', '019c9027-76ae-7146-878f-a498537977c4'),
('019c9028-b5dc-7288-a0ee-b802494d63b8', '019c9027-76a0-70d2-9555-d6cfd6ba89b2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cultures`
--

CREATE TABLE `cultures` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cultures`
--

INSERT INTO `cultures` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
('019c9027-768d-73e6-9f26-8dfe91435eb5', 'SOJA', 'A', '2026-02-24 14:57:11', '2026-02-24 14:57:11'),
('019c9027-76a0-70d2-9555-d6cfd6ba89b2', 'MILHO', 'A', '2026-02-24 14:57:11', '2026-02-24 14:57:11'),
('019c9027-76ae-7146-878f-a498537977c4', 'MILHETO', 'A', '2026-02-24 14:57:11', '2026-02-24 14:57:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `daily_releases`
--

CREATE TABLE `daily_releases` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_meter_kilometer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `defensives`
--

CREATE TABLE `defensives` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_operation_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date NOT NULL,
  `pump_volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ump_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommended_pump_volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used_bomb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difference_bomb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `drivers`
--

CREATE TABLE `drivers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `employees`
--

CREATE TABLE `employees` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entry_invoices`
--

CREATE TABLE `entry_invoices` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbernote_number` int NOT NULL,
  `serie` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emission_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `total_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entry_invoice_products`
--

CREATE TABLE `entry_invoice_products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_invoice_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `farms`
--

CREATE TABLE `farms` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `farms`
--

INSERT INTO `farms` (`id`, `owner_id`, `producer_id`, `name`, `total_area`, `status`, `created_at`, `updated_at`) VALUES
('019c902a-1334-7012-9343-a2b4e284b63b', '019c9029-bb2a-7033-a152-0b26b42a1edd', '019c9029-d451-73e1-9294-1bef672fe0b9', 'Fazenda 01', '350', 'A', '2026-02-24 15:00:02', '2026-02-24 15:00:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fields`
--

CREATE TABLE `fields` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `farm_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `fields`
--

INSERT INTO `fields` (`id`, `farm_id`, `name`, `area`, `block`, `status`, `created_at`, `updated_at`) VALUES
('019c902a-6140-7251-a15e-2ff789ece4eb', '019c902a-1334-7012-9343-a2b4e284b63b', 'TALHÃO 01', '50', 'A', 'A', '2026-02-24 15:00:22', '2026-02-24 15:00:22'),
('019c902a-c3c5-71de-ad25-618f8c483cc0', '019c902a-1334-7012-9343-a2b4e284b63b', 'TALHÃO 02', '250', 'V', 'A', '2026-02-24 15:00:47', '2026-02-24 15:00:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fleets`
--

CREATE TABLE `fleets` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_group_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_brand_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_model_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'O',
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acquisition_date` date NOT NULL,
  `acquisition_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'D',
  `marking_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `starting_meter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_gauge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fleet_brands`
--

CREATE TABLE `fleet_brands` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fleet_groups`
--

CREATE TABLE `fleet_groups` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fleet_models`
--

CREATE TABLE `fleet_models` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_brand_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `harvest_releases`
--

CREATE TABLE `harvest_releases` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_field_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lanyard_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matrix_freight_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `shipping_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `control_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liquid_bags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_bags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `lanyards`
--

CREATE TABLE `lanyards` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_quantity` int NOT NULL,
  `number_feet` int NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `lanyards`
--

INSERT INTO `lanyards` (`id`, `supplier_id`, `front`, `machine_quantity`, `number_feet`, `status`, `created_at`, `updated_at`) VALUES
('019c966c-a02b-7243-ae30-d01e41121403', '019c95e4-f969-73e6-be38-a17bc7aab969', 'FRENTE 01', 8, 280, 'A', '2026-02-25 20:10:27', '2026-02-25 20:10:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `matrix_freights`
--

CREATE TABLE `matrix_freights` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_02_12_083349_create_personal_access_tokens_table', 1),
(5, '2026_02_13_160749_create_agricultural_years_table', 1),
(6, '2026_02_13_160750_create_cultures_table', 1),
(7, '2026_02_13_160751_create_crops_table', 1),
(8, '2026_02_13_160752_create_variety_cultures_table', 1),
(9, '2026_02_13_160753_create_crop_culture_table', 1),
(10, '2026_02_16_131116_create_owners_table', 1),
(11, '2026_02_16_131117_create_producers_table', 1),
(12, '2026_02_16_131118_create_farms_table', 1),
(13, '2026_02_16_131119_create_fields_table', 1),
(15, '2026_02_16_131121_create_matrix_freights_table', 1),
(16, '2026_02_16_153708_create_type_suppliers_table', 1),
(18, '2026_02_16_153710_create_bank_suppliers_table', 1),
(19, '2026_02_16_153711_create_warehouses_table', 1),
(21, '2026_02_16_153713_create_drivers_table', 1),
(22, '2026_02_16_153714_create_employees_table', 1),
(24, '2026_02_16_162335_create_fleet_groups_table', 1),
(25, '2026_02_16_162336_create_fleet_brands_table', 1),
(26, '2026_02_16_162337_create_fleet_models_table', 1),
(27, '2026_02_16_162338_create_fleets_table', 1),
(28, '2026_02_16_162339_create_type_operations_table', 1),
(29, '2026_02_16_162340_create_agricultural_operators_table', 1),
(30, '2026_02_16_162341_create_product_groups_table', 1),
(31, '2026_02_16_162342_create_sub_group_products_table', 1),
(32, '2026_02_16_162343_create_purpose_products_table', 1),
(33, '2026_02_16_162344_create_products_table', 1),
(34, '2026_02_16_162345_create_supplier_products_table', 1),
(35, '2026_02_16_162348_create_type_posts_table', 1),
(36, '2026_02_16_162349_create_posts_table', 1),
(37, '2026_02_16_181752_create_product_posts_table', 1),
(38, '2026_02_17_153321_create_entry_invoices_table', 1),
(39, '2026_02_17_153322_create_entry_invoice_products_table', 1),
(40, '2026_02_18_183736_create_closing_releases_table', 1),
(41, '2026_02_18_183737_create_daily_releases_table', 1),
(42, '2026_02_18_183738_create_harvest_releases_table', 1),
(43, '2026_02_19_203919_create_defensives_table', 1),
(44, '2026_02_19_203920_create_operators_table', 1),
(45, '2026_02_19_203921_create_product_services_table', 1),
(46, '2026_02_19_203922_create_product_tankers_table', 1),
(47, '2026_02_16_131120_create_plot_fields_table', 2),
(48, '2026_02_16_153709_create_suppliers_table', 3),
(49, '2026_02_16_153715_create_supplier_type_supplier_table', 4),
(50, '2026_02_16_153712_create_lanyards_table', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `operators`
--

CREATE TABLE `operators` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defensive_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `owners`
--

CREATE TABLE `owners` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corporate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'T',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `owners`
--

INSERT INTO `owners` (`id`, `corporate_name`, `fantasy_name`, `payment_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
('019c9029-772d-70e4-b749-f7a9458e16d0', 'PROPRIETÁRIO RAZÃO 01', 'PROPRIETÁRIO FANTASIA 01', 'D', 'A', '2026-02-24 14:59:22', '2026-02-24 14:59:22', NULL),
('019c9029-bb2a-7033-a152-0b26b42a1edd', 'PROPRIETÁRIO RAZÃO 02', 'PROPRIETÁRIO FANTASIA 02', 'T', 'A', '2026-02-24 14:59:39', '2026-02-24 14:59:39', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Api\\Registrations\\Admin\\User', 1, 'admin@admin.com.br', '002034c0062754bea54392cd713f6d5fff2792b8bd99d2735f8270b413339cdd', '[\"*\"]', '2026-02-25 20:15:23', NULL, '2026-02-24 14:57:21', '2026-02-25 20:15:23'),
(2, 'App\\Models\\Api\\Registrations\\Admin\\User', 1, 'admin@admin.com.br', 'c87611b85b9bc3abe6ecd288ab59f3b1f01b2152f4916853baae4d9165dea603', '[\"*\"]', '2026-02-24 15:12:19', NULL, '2026-02-24 15:04:14', '2026-02-24 15:12:19'),
(3, 'App\\Models\\Api\\Registrations\\Admin\\User', 1, 'admin@admin.com.br', 'ad4c45e56abac3ca31a7a54cd4e6a1c04c0602226f39bc71dd69b64938930103', '[\"*\"]', '2026-02-25 16:38:18', NULL, '2026-02-25 15:07:14', '2026-02-25 16:38:18'),
(4, 'App\\Models\\Api\\Registrations\\Admin\\User', 1, 'admin@admin.com.br', '7a8baefddd8c89dc18c930992d5552598692e99111ba0b12a77a30d1ec7b4a0f', '[\"*\"]', '2026-02-25 17:57:23', NULL, '2026-02-25 17:01:09', '2026-02-25 17:57:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `plot_fields`
--

CREATE TABLE `plot_fields` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variety_culture_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `plot_fields`
--

INSERT INTO `plot_fields` (`id`, `field_id`, `crop_id`, `culture_id`, `variety_culture_id`, `area`, `status`, `created_at`, `updated_at`) VALUES
('019c95b1-7f02-71ac-b498-b7815b744594', '019c902a-6140-7251-a15e-2ff789ece4eb', '019c9028-b5dc-7288-a0ee-b802494d63b8', '019c9027-76a0-70d2-9555-d6cfd6ba89b2', '019c95aa-f547-706d-9277-1475632eb951', '50', 'A', '2026-02-25 16:46:03', '2026-02-25 16:46:03');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `producers`
--

CREATE TABLE `producers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `producers`
--

INSERT INTO `producers` (`id`, `owner_id`, `status`, `created_at`, `updated_at`) VALUES
('019c9029-d451-73e1-9294-1bef672fe0b9', '019c9029-772d-70e4-b749-f7a9458e16d0', 'A', '2026-02-24 14:59:46', '2026-02-24 14:59:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_group_product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose_product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `stock_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `drum_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `gallon_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `unit` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'K',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_groups`
--

CREATE TABLE `product_groups` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_posts`
--

CREATE TABLE `product_posts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_services`
--

CREATE TABLE `product_services` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defensive_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pump` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose_used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pump_used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_tankers`
--

CREATE TABLE `product_tankers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `purpose_products`
--

CREATE TABLE `purpose_products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cEaczl3M7IXG1dW1AIBSLqAWK0kHNb65vnNU4FkP', 1, '172.18.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWUlrckZWY052OVVGSlJ0ZkJzQldQVlBSakh4UnhJc0VpMGxteUtyWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1772050523);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sub_group_products`
--

CREATE TABLE `sub_group_products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_group_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `suppliers`
--

CREATE TABLE `suppliers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corporate_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F',
  `cpf_cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg_ie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `suppliers`
--

INSERT INTO `suppliers` (`id`, `corporate_reason`, `fantasy_name`, `type`, `cpf_cnpj`, `rg_ie`, `status`, `created_at`, `updated_at`) VALUES
('019c95e4-f969-73e6-be38-a17bc7aab969', 'FORNECEDOR RAZÃO 01', 'FORNECEDOR FANTASIA 01', 'F', '975654898498', '98498984', 'A', '2026-02-25 17:42:17', '2026-02-25 17:42:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `supplier_products`
--

CREATE TABLE `supplier_products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `supplier_type_supplier`
--

CREATE TABLE `supplier_type_supplier` (
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `supplier_type_supplier`
--

INSERT INTO `supplier_type_supplier` (`supplier_id`, `type_supplier_id`) VALUES
('019c95e4-f969-73e6-be38-a17bc7aab969', '019c95b4-fa28-7201-baa4-8119a00fcea7');

-- --------------------------------------------------------

--
-- Estrutura para tabela `type_operations`
--

CREATE TABLE `type_operations` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `type_posts`
--

CREATE TABLE `type_posts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `type_suppliers`
--

CREATE TABLE `type_suppliers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `type_suppliers`
--

INSERT INTO `type_suppliers` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
('019c95b4-fa28-7201-baa4-8119a00fcea7', 'TRANSPORTADOR', 'A', '2026-02-25 16:49:51', '2026-02-25 16:49:51'),
('019c95b5-14bb-7144-888a-d3350c819d59', 'COLHEDOR', 'A', '2026-02-25 16:49:58', '2026-02-25 16:49:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com.br', '2026-02-24 14:57:11', '$2y$12$kVFUHJyhuUHUBMBGkUU21uzvWpn47PUiWFRzNYmrPwo2uiHzX32PW', 'LWmlkh0isR', '2026-02-24 14:57:11', '2026-02-24 14:57:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `variety_cultures`
--

CREATE TABLE `variety_cultures` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `variety_cultures`
--

INSERT INTO `variety_cultures` (`id`, `culture_id`, `name`, `technology`, `cycle`, `status`, `created_at`, `updated_at`) VALUES
('019c9028-ee5e-715d-8cde-150f15735524', '019c9027-768d-73e6-9f26-8dfe91435eb5', 'TBM', 'IPRO', '90', 'A', '2026-02-24 14:58:47', '2026-02-24 14:58:47'),
('019c95aa-f547-706d-9277-1475632eb951', '019c9027-76a0-70d2-9555-d6cfd6ba89b2', 'VARIEDADE 01', 'IPRO', '25', 'A', '2026-02-25 16:38:55', '2026-02-25 16:38:55'),
('019c95ab-246d-72f6-b57f-3dab2511d9b4', '019c9027-76ae-7146-878f-a498537977c4', 'VARIEDADE 02', 'IPRO', '90', 'A', '2026-02-25 16:39:07', '2026-02-25 16:39:07'),
('019c95ab-4dcb-701f-bcd1-355543514694', '019c9027-76a0-70d2-9555-d6cfd6ba89b2', 'VARIEDADE 03', 'IPRO', '25', 'A', '2026-02-25 16:39:17', '2026-02-25 16:39:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `warehouses`
--

CREATE TABLE `warehouses` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `warehouses`
--

INSERT INTO `warehouses` (`id`, `supplier_id`, `name`, `city`, `route`, `status`, `created_at`, `updated_at`) VALUES
('019c95f1-b933-72c7-a9f0-b554d152c34a', '019c95e4-f969-73e6-be38-a17bc7aab969', 'ARMAZÉM 01', 'BOM JESUS', '1', 'A', '2026-02-25 17:56:12', '2026-02-25 17:56:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agricultural_operators`
--
ALTER TABLE `agricultural_operators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agricultural_operators_employee_id_foreign` (`employee_id`);

--
-- Índices de tabela `agricultural_years`
--
ALTER TABLE `agricultural_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agricultural_years_name_unique` (`name`);

--
-- Índices de tabela `bank_suppliers`
--
ALTER TABLE `bank_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_suppliers_supplier_id_foreign` (`supplier_id`);

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Índices de tabela `closing_releases`
--
ALTER TABLE `closing_releases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `closing_releases_post_id_foreign` (`post_id`),
  ADD KEY `closing_releases_product_id_foreign` (`product_id`);

--
-- Índices de tabela `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crops_name_unique` (`name`),
  ADD KEY `crops_agricultural_year_id_foreign` (`agricultural_year_id`);

--
-- Índices de tabela `crop_culture`
--
ALTER TABLE `crop_culture`
  ADD KEY `crop_culture_crop_id_foreign` (`crop_id`),
  ADD KEY `crop_culture_culture_id_foreign` (`culture_id`);

--
-- Índices de tabela `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cultures_name_unique` (`name`);

--
-- Índices de tabela `daily_releases`
--
ALTER TABLE `daily_releases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_releases_post_id_foreign` (`post_id`),
  ADD KEY `daily_releases_product_id_foreign` (`product_id`),
  ADD KEY `daily_releases_fleet_id_foreign` (`fleet_id`);

--
-- Índices de tabela `defensives`
--
ALTER TABLE `defensives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `defensives_type_operation_id_foreign` (`type_operation_id`),
  ADD KEY `defensives_crop_id_foreign` (`crop_id`),
  ADD KEY `defensives_culture_id_foreign` (`culture_id`),
  ADD KEY `defensives_field_id_foreign` (`field_id`);

--
-- Índices de tabela `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_name_unique` (`name`),
  ADD UNIQUE KEY `drivers_code_unique` (`code`),
  ADD UNIQUE KEY `drivers_plate_unique` (`plate`),
  ADD KEY `drivers_supplier_id_foreign` (`supplier_id`);

--
-- Índices de tabela `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_name_unique` (`name`);

--
-- Índices de tabela `entry_invoices`
--
ALTER TABLE `entry_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entry_invoices_supplier_id_foreign` (`supplier_id`),
  ADD KEY `entry_invoices_producer_id_foreign` (`producer_id`);

--
-- Índices de tabela `entry_invoice_products`
--
ALTER TABLE `entry_invoice_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entry_invoice_products_entry_invoice_id_foreign` (`entry_invoice_id`),
  ADD KEY `entry_invoice_products_product_id_foreign` (`product_id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farms_owner_id_foreign` (`owner_id`),
  ADD KEY `farms_producer_id_foreign` (`producer_id`);

--
-- Índices de tabela `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_farm_id_foreign` (`farm_id`);

--
-- Índices de tabela `fleets`
--
ALTER TABLE `fleets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fleets_name_unique` (`name`),
  ADD UNIQUE KEY `fleets_code_unique` (`code`),
  ADD UNIQUE KEY `fleets_plate_unique` (`plate`),
  ADD UNIQUE KEY `fleets_chassi_unique` (`chassi`),
  ADD KEY `fleets_fleet_group_id_foreign` (`fleet_group_id`),
  ADD KEY `fleets_fleet_brand_id_foreign` (`fleet_brand_id`),
  ADD KEY `fleets_fleet_model_id_foreign` (`fleet_model_id`);

--
-- Índices de tabela `fleet_brands`
--
ALTER TABLE `fleet_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fleet_brands_name_unique` (`name`);

--
-- Índices de tabela `fleet_groups`
--
ALTER TABLE `fleet_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fleet_groups_name_unique` (`name`);

--
-- Índices de tabela `fleet_models`
--
ALTER TABLE `fleet_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fleet_models_name_unique` (`name`),
  ADD KEY `fleet_models_fleet_brand_id_foreign` (`fleet_brand_id`);

--
-- Índices de tabela `harvest_releases`
--
ALTER TABLE `harvest_releases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `harvest_releases_crop_id_foreign` (`crop_id`),
  ADD KEY `harvest_releases_driver_id_foreign` (`driver_id`),
  ADD KEY `harvest_releases_owner_id_foreign` (`owner_id`),
  ADD KEY `harvest_releases_plot_field_id_foreign` (`plot_field_id`),
  ADD KEY `harvest_releases_warehouse_id_foreign` (`warehouse_id`),
  ADD KEY `harvest_releases_lanyard_id_foreign` (`lanyard_id`),
  ADD KEY `harvest_releases_matrix_freight_id_foreign` (`matrix_freight_id`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lanyards`
--
ALTER TABLE `lanyards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lanyards_supplier_id_foreign` (`supplier_id`);

--
-- Índices de tabela `matrix_freights`
--
ALTER TABLE `matrix_freights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matrix_freights_crop_id_foreign` (`crop_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operators_defensive_id_foreign` (`defensive_id`),
  ADD KEY `operators_operator_id_foreign` (`operator_id`),
  ADD KEY `operators_fleet_id_foreign` (`fleet_id`);

--
-- Índices de tabela `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owners_corporate_name_unique` (`corporate_name`),
  ADD UNIQUE KEY `owners_fantasy_name_unique` (`fantasy_name`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Índices de tabela `plot_fields`
--
ALTER TABLE `plot_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plot_fields_field_id_foreign` (`field_id`),
  ADD KEY `plot_fields_crop_id_foreign` (`crop_id`),
  ADD KEY `plot_fields_culture_id_foreign` (`culture_id`),
  ADD KEY `plot_fields_variety_culture_id_foreign` (`variety_culture_id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_name_unique` (`name`),
  ADD KEY `posts_type_post_id_foreign` (`type_post_id`);

--
-- Índices de tabela `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producers_owner_id_foreign` (`owner_id`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_group_product_id_foreign` (`group_product_id`),
  ADD KEY `products_sub_group_product_id_foreign` (`sub_group_product_id`),
  ADD KEY `products_purpose_product_id_foreign` (`purpose_product_id`);

--
-- Índices de tabela `product_groups`
--
ALTER TABLE `product_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_groups_name_unique` (`name`);

--
-- Índices de tabela `product_posts`
--
ALTER TABLE `product_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_posts_post_id_foreign` (`post_id`),
  ADD KEY `product_posts_product_id_foreign` (`product_id`);

--
-- Índices de tabela `product_services`
--
ALTER TABLE `product_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_services_defensive_id_foreign` (`defensive_id`),
  ADD KEY `product_services_operation_id_foreign` (`operation_id`),
  ADD KEY `product_services_product_id_foreign` (`product_id`);

--
-- Índices de tabela `product_tankers`
--
ALTER TABLE `product_tankers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tankers_product_id_foreign` (`product_id`),
  ADD KEY `product_tankers_operator_id_foreign` (`operator_id`);

--
-- Índices de tabela `purpose_products`
--
ALTER TABLE `purpose_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purpose_products_name_unique` (`name`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `sub_group_products`
--
ALTER TABLE `sub_group_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_group_products_name_unique` (`name`),
  ADD KEY `sub_group_products_product_group_id_foreign` (`product_group_id`);

--
-- Índices de tabela `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_corporate_reason_unique` (`corporate_reason`),
  ADD UNIQUE KEY `suppliers_fantasy_name_unique` (`fantasy_name`),
  ADD UNIQUE KEY `suppliers_cpf_cnpj_unique` (`cpf_cnpj`),
  ADD UNIQUE KEY `suppliers_rg_ie_unique` (`rg_ie`);

--
-- Índices de tabela `supplier_products`
--
ALTER TABLE `supplier_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_products_supplier_id_foreign` (`supplier_id`),
  ADD KEY `supplier_products_product_id_foreign` (`product_id`);

--
-- Índices de tabela `type_operations`
--
ALTER TABLE `type_operations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_operations_name_unique` (`name`);

--
-- Índices de tabela `type_posts`
--
ALTER TABLE `type_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_posts_name_unique` (`name`);

--
-- Índices de tabela `type_suppliers`
--
ALTER TABLE `type_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_suppliers_name_unique` (`name`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices de tabela `variety_cultures`
--
ALTER TABLE `variety_cultures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `variety_cultures_name_unique` (`name`),
  ADD KEY `variety_cultures_culture_id_foreign` (`culture_id`);

--
-- Índices de tabela `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouses_supplier_id_foreign` (`supplier_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agricultural_operators`
--
ALTER TABLE `agricultural_operators`
  ADD CONSTRAINT `agricultural_operators_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Restrições para tabelas `bank_suppliers`
--
ALTER TABLE `bank_suppliers`
  ADD CONSTRAINT `bank_suppliers_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Restrições para tabelas `closing_releases`
--
ALTER TABLE `closing_releases`
  ADD CONSTRAINT `closing_releases_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `closing_releases_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `crops`
--
ALTER TABLE `crops`
  ADD CONSTRAINT `crops_agricultural_year_id_foreign` FOREIGN KEY (`agricultural_year_id`) REFERENCES `agricultural_years` (`id`);

--
-- Restrições para tabelas `crop_culture`
--
ALTER TABLE `crop_culture`
  ADD CONSTRAINT `crop_culture_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`),
  ADD CONSTRAINT `crop_culture_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`);

--
-- Restrições para tabelas `daily_releases`
--
ALTER TABLE `daily_releases`
  ADD CONSTRAINT `daily_releases_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`),
  ADD CONSTRAINT `daily_releases_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `daily_releases_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `defensives`
--
ALTER TABLE `defensives`
  ADD CONSTRAINT `defensives_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`),
  ADD CONSTRAINT `defensives_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`),
  ADD CONSTRAINT `defensives_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`),
  ADD CONSTRAINT `defensives_type_operation_id_foreign` FOREIGN KEY (`type_operation_id`) REFERENCES `type_operations` (`id`);

--
-- Restrições para tabelas `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Restrições para tabelas `entry_invoices`
--
ALTER TABLE `entry_invoices`
  ADD CONSTRAINT `entry_invoices_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`),
  ADD CONSTRAINT `entry_invoices_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Restrições para tabelas `entry_invoice_products`
--
ALTER TABLE `entry_invoice_products`
  ADD CONSTRAINT `entry_invoice_products_entry_invoice_id_foreign` FOREIGN KEY (`entry_invoice_id`) REFERENCES `entry_invoices` (`id`),
  ADD CONSTRAINT `entry_invoice_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `farms`
--
ALTER TABLE `farms`
  ADD CONSTRAINT `farms_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`),
  ADD CONSTRAINT `farms_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`);

--
-- Restrições para tabelas `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_farm_id_foreign` FOREIGN KEY (`farm_id`) REFERENCES `farms` (`id`);

--
-- Restrições para tabelas `fleets`
--
ALTER TABLE `fleets`
  ADD CONSTRAINT `fleets_fleet_brand_id_foreign` FOREIGN KEY (`fleet_brand_id`) REFERENCES `fleet_brands` (`id`),
  ADD CONSTRAINT `fleets_fleet_group_id_foreign` FOREIGN KEY (`fleet_group_id`) REFERENCES `fleet_groups` (`id`),
  ADD CONSTRAINT `fleets_fleet_model_id_foreign` FOREIGN KEY (`fleet_model_id`) REFERENCES `fleet_models` (`id`);

--
-- Restrições para tabelas `fleet_models`
--
ALTER TABLE `fleet_models`
  ADD CONSTRAINT `fleet_models_fleet_brand_id_foreign` FOREIGN KEY (`fleet_brand_id`) REFERENCES `fleet_brands` (`id`);

--
-- Restrições para tabelas `harvest_releases`
--
ALTER TABLE `harvest_releases`
  ADD CONSTRAINT `harvest_releases_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`),
  ADD CONSTRAINT `harvest_releases_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `harvest_releases_lanyard_id_foreign` FOREIGN KEY (`lanyard_id`) REFERENCES `lanyards` (`id`),
  ADD CONSTRAINT `harvest_releases_matrix_freight_id_foreign` FOREIGN KEY (`matrix_freight_id`) REFERENCES `matrix_freights` (`id`),
  ADD CONSTRAINT `harvest_releases_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`),
  ADD CONSTRAINT `harvest_releases_plot_field_id_foreign` FOREIGN KEY (`plot_field_id`) REFERENCES `plot_fields` (`id`),
  ADD CONSTRAINT `harvest_releases_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`);

--
-- Restrições para tabelas `lanyards`
--
ALTER TABLE `lanyards`
  ADD CONSTRAINT `lanyards_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Restrições para tabelas `matrix_freights`
--
ALTER TABLE `matrix_freights`
  ADD CONSTRAINT `matrix_freights_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`);

--
-- Restrições para tabelas `operators`
--
ALTER TABLE `operators`
  ADD CONSTRAINT `operators_defensive_id_foreign` FOREIGN KEY (`defensive_id`) REFERENCES `defensives` (`id`),
  ADD CONSTRAINT `operators_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`),
  ADD CONSTRAINT `operators_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`);

--
-- Restrições para tabelas `plot_fields`
--
ALTER TABLE `plot_fields`
  ADD CONSTRAINT `plot_fields_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`),
  ADD CONSTRAINT `plot_fields_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`),
  ADD CONSTRAINT `plot_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`),
  ADD CONSTRAINT `plot_fields_variety_culture_id_foreign` FOREIGN KEY (`variety_culture_id`) REFERENCES `variety_cultures` (`id`);

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_type_post_id_foreign` FOREIGN KEY (`type_post_id`) REFERENCES `type_posts` (`id`);

--
-- Restrições para tabelas `producers`
--
ALTER TABLE `producers`
  ADD CONSTRAINT `producers_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`);

--
-- Restrições para tabelas `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_group_product_id_foreign` FOREIGN KEY (`group_product_id`) REFERENCES `group_products` (`id`),
  ADD CONSTRAINT `products_purpose_product_id_foreign` FOREIGN KEY (`purpose_product_id`) REFERENCES `purpose_products` (`id`),
  ADD CONSTRAINT `products_sub_group_product_id_foreign` FOREIGN KEY (`sub_group_product_id`) REFERENCES `sub_group_products` (`id`);

--
-- Restrições para tabelas `product_posts`
--
ALTER TABLE `product_posts`
  ADD CONSTRAINT `product_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `product_posts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `product_services`
--
ALTER TABLE `product_services`
  ADD CONSTRAINT `product_services_defensive_id_foreign` FOREIGN KEY (`defensive_id`) REFERENCES `defensives` (`id`),
  ADD CONSTRAINT `product_services_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`),
  ADD CONSTRAINT `product_services_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `product_tankers`
--
ALTER TABLE `product_tankers`
  ADD CONSTRAINT `product_tankers_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`),
  ADD CONSTRAINT `product_tankers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Restrições para tabelas `sub_group_products`
--
ALTER TABLE `sub_group_products`
  ADD CONSTRAINT `sub_group_products_product_group_id_foreign` FOREIGN KEY (`product_group_id`) REFERENCES `product_groups` (`id`);

--
-- Restrições para tabelas `supplier_products`
--
ALTER TABLE `supplier_products`
  ADD CONSTRAINT `supplier_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `supplier_products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Restrições para tabelas `variety_cultures`
--
ALTER TABLE `variety_cultures`
  ADD CONSTRAINT `variety_cultures_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`);

--
-- Restrições para tabelas `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);
COMMIT;