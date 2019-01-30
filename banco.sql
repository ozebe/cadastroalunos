-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 30/01/2019 às 21:46
-- Versão do servidor: 5.7.23
-- Versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `carango`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `roles`
--

INSERT INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'Administrador', '2019-01-29 16:05:41', '2019-01-29 16:05:58'),
(2, 'Professor', '2019-01-29 16:05:52', '2019-01-29 16:06:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `city` varchar(100) NOT NULL,
  `neighborhood` varchar(200) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `publicplace` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `student`
--

INSERT INTO `student` (`id`, `user_id`, `name`, `email`, `photo`, `telephone`, `cpf`, `sex`, `birthdate`, `address`, `uf`, `city`, `neighborhood`, `cep`, `publicplace`, `number`, `created`, `modified`) VALUES
(1, 3, 'Maria Elena', 'maria3@gmail.com.br', '', '939393939q', '66277051260', 2, '2019-01-30', '222Av. AAA', 'AQ', 'Alagoas 333', 'Perto do Shopping', '5734023922', 'mamamama2222', '2122', '2019-01-29 22:14:51', '2019-01-30 20:51:35'),
(2, 2, 'João Sergio', 'joao@gmail.com.br', '', '9393939393', '66277051251', 1, '2019-01-30', 'Av. AAA', 'Aq', 'Alagoas', 'Perto do Shopping', '5734033922', 'mamamama', '21', '2019-01-30 19:14:07', '2019-01-30 20:51:53'),
(5, 3, 'Carlos Jose', 'carlos@gmail.com', 'instagram.png', '9393939393', '66277051257', 1, '2019-01-01', 'Av. AAA', 'AL', 'Alagoas', 'Perto do Shopping', '5734033922', 'mamamama', '21', '2019-01-30 20:35:14', '2019-01-30 20:35:14'),
(6, 2, 'Marcos', 'marcos@gmail.com', '', '9393939393', '66277051270', 0, '2014-02-02', 'Av. AAA', 'AL', 'Alagoas', 'Perto do Shopping', '5734033922', 'mamamama', '21', '2019-01-30 20:55:53', '2019-01-30 20:55:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `roles_id`, `created`, `modified`) VALUES
(1, 'maurosantos', '$2y$10$NG0876gUns5naxvIl2EztONjlvud.IdbW4D05X/OjjF5FMMCBneLm', 'mauro@bsd.com.br', 1, '2019-01-29 16:21:27', '2019-01-30 18:29:58'),
(2, 'fabiola', '$2y$10$4ecz.uOfz7bTVbhIRNDXk.pc.4mY65/NBwUGNI5BE79HJ7XfVPzzW', 'fabiola@gmail.com', 2, '2019-01-29 16:31:57', '2019-01-29 16:31:57'),
(3, 'thiago', '$2y$10$s47humrG44qPgJxwqD0UfO9TGnmZMDWJ85YG9GE/GAUU7BYRE2jDW', 'thiago@gmail.com', 2, '2019-01-29 16:32:16', '2019-01-29 16:32:16'),
(16, 'marlene', '$2y$10$PP0XlZBmM/lHBADWeZ.lU.LebEBL1gotqwEXBa57N.NF6e3pAQZI6', 'marlene@gmail.com', 2, '2019-01-30 20:01:16', '2019-01-30 20:01:16'),
(17, 'admin', '$2y$10$K8l0ab35g0IPa5Ui1zJTLuIyd5mGHnNaf7iT4kGtd6uHRlzqqQuGS', 'admin@admin.com', 1, '2019-01-30 21:30:22', '2019-01-30 21:30:22');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
