<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328162656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE literature DROP FOREIGN KEY FK_5D0BA6BBEA24AE36');
        $this->addSql('DROP TABLE text_style');
        $this->addSql('DROP INDEX IDX_5D0BA6BBEA24AE36 ON literature');
        $this->addSql('ALTER TABLE literature DROP textstyle_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE text_style (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE literature ADD textstyle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE literature ADD CONSTRAINT FK_5D0BA6BBEA24AE36 FOREIGN KEY (textstyle_id) REFERENCES text_style (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5D0BA6BBEA24AE36 ON literature (textstyle_id)');
    }
}
