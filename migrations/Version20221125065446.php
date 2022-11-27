<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221125065446 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Initial version';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE modeles (id INT AUTO_INCREMENT NOT NULL, nom DATE NOT NULL, prix INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, accessoires VARCHAR(255) DEFAULT NULL, listes_jeux VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE modeles');
    }
}
