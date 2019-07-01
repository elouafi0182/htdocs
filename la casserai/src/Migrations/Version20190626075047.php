<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626075047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reserveringen ADD room_id_id INT NOT NULL, ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserveringen ADD CONSTRAINT FK_AEEE484B35F83FFC FOREIGN KEY (room_id_id) REFERENCES kamer (id)');
        $this->addSql('ALTER TABLE reserveringen ADD CONSTRAINT FK_AEEE484B9D86650F FOREIGN KEY (user_id_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE INDEX IDX_AEEE484B35F83FFC ON reserveringen (room_id_id)');
        $this->addSql('CREATE INDEX IDX_AEEE484B9D86650F ON reserveringen (user_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reserveringen DROP FOREIGN KEY FK_AEEE484B35F83FFC');
        $this->addSql('ALTER TABLE reserveringen DROP FOREIGN KEY FK_AEEE484B9D86650F');
        $this->addSql('DROP INDEX IDX_AEEE484B35F83FFC ON reserveringen');
        $this->addSql('DROP INDEX IDX_AEEE484B9D86650F ON reserveringen');
        $this->addSql('ALTER TABLE reserveringen DROP room_id_id, DROP user_id_id');
    }
}
