<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230202123610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F28ADF0A3C');
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F2A6F3969B');
        $this->addSql('DROP INDEX UNIQ_F4D874F2A6F3969B ON prestamo');
        $this->addSql('DROP INDEX IDX_F4D874F28ADF0A3C ON prestamo');
        $this->addSql('ALTER TABLE prestamo ADD socio_id INT NOT NULL, ADD ejemplar_id INT NOT NULL, DROP id_socio_id, DROP id_ejemplar_id');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F2DA04E6A9 FOREIGN KEY (socio_id) REFERENCES socio (id)');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F2BEE15B6C FOREIGN KEY (ejemplar_id) REFERENCES ejemplar (id)');
        $this->addSql('CREATE INDEX IDX_F4D874F2DA04E6A9 ON prestamo (socio_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F4D874F2BEE15B6C ON prestamo (ejemplar_id)');
        $this->addSql('ALTER TABLE socio DROP FOREIGN KEY FK_38B653099D86650F');
        $this->addSql('DROP INDEX UNIQ_38B653099D86650F ON socio');
        $this->addSql('ALTER TABLE socio DROP user_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F2DA04E6A9');
        $this->addSql('ALTER TABLE prestamo DROP FOREIGN KEY FK_F4D874F2BEE15B6C');
        $this->addSql('DROP INDEX IDX_F4D874F2DA04E6A9 ON prestamo');
        $this->addSql('DROP INDEX UNIQ_F4D874F2BEE15B6C ON prestamo');
        $this->addSql('ALTER TABLE prestamo ADD id_socio_id INT NOT NULL, ADD id_ejemplar_id INT NOT NULL, DROP socio_id, DROP ejemplar_id');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F28ADF0A3C FOREIGN KEY (id_socio_id) REFERENCES socio (id)');
        $this->addSql('ALTER TABLE prestamo ADD CONSTRAINT FK_F4D874F2A6F3969B FOREIGN KEY (id_ejemplar_id) REFERENCES ejemplar (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F4D874F2A6F3969B ON prestamo (id_ejemplar_id)');
        $this->addSql('CREATE INDEX IDX_F4D874F28ADF0A3C ON prestamo (id_socio_id)');
        $this->addSql('ALTER TABLE socio ADD user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE socio ADD CONSTRAINT FK_38B653099D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_38B653099D86650F ON socio (user_id_id)');
    }
}
