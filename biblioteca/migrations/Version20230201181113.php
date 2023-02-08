<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230201181113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ejemplar (id INT AUTO_INCREMENT NOT NULL, isbn_id INT NOT NULL, estado TINYINT(1) NOT NULL, estanteria VARCHAR(255) NOT NULL, INDEX IDX_36B9726AFFF1118 (isbn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE libro (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, autor VARCHAR(255) NOT NULL, editorial VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestamo (id INT AUTO_INCREMENT NOT NULL, id_socio_id INT NOT NULL, id_ejemplar_id INT NOT NULL, fecha_inicio DATETIME NOT NULL, fecha_fin DATETIME DEFAULT NULL, INDEX IDX_F4D874F28ADF0A3C (id_socio_id), UNIQUE INDEX UNIQ_F4D874F2A6F3969B (id_ejemplar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE socio (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_38B653099D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ejemplar ADD CONSTRAINT FK_36B9726AFFF1118 FOREIGN KEY (isbn_id) REFERENCES libro (id)');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F28ADF0A3C FOREIGN KEY (id_socio_id) REFERENCES socio (id)');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F2A6F3969B FOREIGN KEY (id_ejemplar_id) REFERENCES ejemplar (id)');
        $this->addSql('ALTER TABLE socio ADD CONSTRAINT FK_38B653099D86650F FOREIGN KEY (user_id_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ejemplar DROP FOREIGN KEY FK_36B9726AFFF1118');
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F28ADF0A3C');
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F2A6F3969B');
        $this->addSql('ALTER TABLE socio DROP FOREIGN KEY FK_38B653099D86650F');
        $this->addSql('DROP TABLE ejemplar');
        $this->addSql('DROP TABLE libro');
        $this->addSql('DROP TABLE prestamo');
        $this->addSql('DROP TABLE socio');
    }
}
