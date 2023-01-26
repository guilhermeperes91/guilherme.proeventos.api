using Microsoft.EntityFrameworkCore;
using ProEventos.Domain;
using ProEventos.Persistence.Contratos;
using ProEventos.Persistense.Contextos;
using System.Linq;
using System.Threading.Tasks;

namespace ProEventos.Persistence
{
    public class PalestrantePersist : IPalestrantePersist
    {
        //CONSTRUTOR - INJEÇÃO DE DEPENDENCIA
        private readonly ProEventosContext _context;

        public PalestrantePersist(ProEventosContext context)
        {
            _context = context;
        }
        //  
        public async Task<Palestrante[]> GetAllEPalestrantesAsync(bool includeEventos = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Palestrante> query = _context.Palestrantes
                .Include(p => p.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includeEventos)
            {
                query = query
                    .Include(p => p.PalestrantesEventos)
                    .ThenInclude(pe => pe.Evento);
            }

            query = query.AsNoTracking().OrderBy(p => p.Id);

            return await query.ToArrayAsync();
        }

        public async Task<Palestrante[]> GetAllPalestrantesByNomeAsync(string nome, bool includeEventos = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Palestrante> query = _context.Palestrantes
                .Include(p => p.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includeEventos)
            {
                query = query
                    .Include(p => p.PalestrantesEventos)
                    .ThenInclude(pe => pe.Evento);
            }

            query = query.AsNoTracking().OrderBy(p => p.Id)
                .Where(p =>p.Nome.ToLower().Contains(nome.ToLower()));

            return await query.ToArrayAsync();
        }

        public async Task<Palestrante> GetPalestranteByIdAsync(int palestranteId, bool includeEventos = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Palestrante> query = _context.Palestrantes
                .Include(p => p.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includeEventos)
            {
                query = query
                    .Include(p => p.PalestrantesEventos)
                    .ThenInclude(pe => pe.Evento);
            }

            query = query.AsNoTracking().OrderBy(p => p.Id)
                .Where(p => p.Id == palestranteId);

            return await query.FirstOrDefaultAsync();
        }

    }
}
