<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230704083650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE music DROP FOREIGN KEY FK_CD52224A54A05007');
        $this->addSql('DROP INDEX IDX_CD52224A54A05007 ON music');
        $this->addSql('ALTER TABLE music CHANGE artists_id artist_id INT NOT NULL');
        $this->addSql('ALTER TABLE music ADD CONSTRAINT FK_CD52224AB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_CD52224AB7970CF8 ON music (artist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE music DROP FOREIGN KEY FK_CD52224AB7970CF8');
        $this->addSql('DROP INDEX IDX_CD52224AB7970CF8 ON music');
        $this->addSql('ALTER TABLE music CHANGE artist_id artists_id INT NOT NULL');
        $this->addSql('ALTER TABLE music ADD CONSTRAINT FK_CD52224A54A05007 FOREIGN KEY (artists_id) REFERENCES artist (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CD52224A54A05007 ON music (artists_id)');
    }
}
