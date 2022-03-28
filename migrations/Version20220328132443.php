<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328132443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE literature ADD displayable TINYINT(1) NOT NULL, ADD display_on_website TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE seances ADD display_onwebsite TINYINT(1) NOT NULL, ADD displayable TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE literature DROP displayable, DROP display_on_website');
        $this->addSql('ALTER TABLE seances DROP display_onwebsite, DROP displayable');
    }
}
