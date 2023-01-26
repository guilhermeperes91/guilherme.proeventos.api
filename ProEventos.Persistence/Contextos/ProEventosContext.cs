using Microsoft.EntityFrameworkCore;
using ProEventos.Domain;
//CAMADA DE PERSISTENCE É UM NIVEL ACIMA DA CAMADA DE ACESSO AOS DADOS (DAL)
namespace ProEventos.Persistense.Contextos
{//CONTEXTO PARA O EF FAZER A CRIAÇÃO DAS TABELAS DA BASE NO SQLITE COMANDO UTILIZADO PARA CRIAR => dotnet ef migrations add Initial --project C:\Projects\Curso\ProEventos.Persistence
    //NA PASTA MIGRATIONS MOSTRA A INSTRUÇÃO QUE SERÁ REALIZADA NO BANCO DE DADOS (CREATE, DROP)
    public class ProEventosContext : DbContext 
    {
        public ProEventosContext(DbContextOptions<ProEventosContext> options) : base(options) { } //CONSTRUTOR DO DATACONTEXT

        public DbSet<Evento> Eventos { get; set; }//TABELA EVENTOS, QUE SERÁ CRIADA NO BANCO DE DADOS A PARTIR DA CRIAÇÃO DA MIGRATION, ONDE RECEBERÁ OS CAMPOS DA CLASSE <EVENTO>, PASSADO POR PARAMETRO

        public DbSet<Lote> Lotes { get; set; }
        
        public DbSet<Palestrante> Palestrantes { get; set; }

        public DbSet<PalestranteEvento> PalestrantesEventos { get; set; }

        public DbSet<RedeSocial> RedesSociais { get; set; }

        public DbSet<Curso> Cursos { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<PalestranteEvento>()
                .HasKey(PE => new { PE.EventoId, PE.PalestranteId }); //CRIAÇÃO DE CHAVE - QUANDO TIVER UM PE (PALESTRANTE EVENTO) RELACIONA O EVENTOID COM O PALESTRANTEID

            modelBuilder.Entity<Evento>() //modelbuider, tenho uma entidade que se chama evento
                .HasMany(e => e.RedesSociais) //dentro de evento, tenho varias redes sociais
                .WithOne(rs => rs.Evento) //cada rede social com um evento
                .OnDelete(DeleteBehavior.Cascade); //toda vez que for deletar, deleta em cascata

            modelBuilder.Entity<Palestrante>() //modelbuider, tenho uma entidade que se chama palestrante
                .HasMany(p => p.RedesSociais) //dentro de cada palestrante, tenho varias redes sociais
                .WithOne(rs => rs.Palestrante) //cada rede social com um palestrante
                .OnDelete(DeleteBehavior.Cascade); //toda vez que for deletar, deleta em cascata
        }
    }
    
}

